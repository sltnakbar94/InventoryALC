<div class="row">
    <div class="col-md-12">
        <div class="table">
            <table class="table table-responsive" style="width:100%">
                <tr class="bg-primary">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>UoM</th>
                    <th>Jumlah</th>
                    <th>Harga Satuan</th>
                    <th>Discount</th>
                    <th>Sub Total</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @if (count($crud->entry->details) != 0)
                    @foreach ($crud->entry->details as $key=>$detail)
                    @php
                        $status = array('Plan', 'Process', 'Complete');
                    @endphp
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$detail->item->name}}</td>
                        <td>{{$detail->item->serial}}</td>
                        <td>{{$detail->item->unit}}</td>
                        <td align="right">{{number_format($detail->qty)}}</td>
                        <td align="right">{{number_format($detail->price)}}</td>
                        @if (!empty($detail->discount || $detail->discount != 0))
                            <td align="right">{{number_format($detail->discount)}}%</td>
                        @else
                            <td align="center"> - </td>
                        @endif
                        <td align="right">{{number_format($detail->sub_total)}}</td>
                        <td>{{$status[$detail->status]}}</td>
                        <td>
                            <div class="btn-group">
                                {{-- <button href="{{ route('salesorderdetail.edit', $detail->id) }}" type="button" class="btn btn-warning editModalSalesOrderDetail" data-toggle="modal" data-target="#editModalSalesOrderDetail"><i class="las la-pencil-alt"></i></button> --}}
                                <button id="edit" onclick="edit({{ $detail->id }})" type="button" class="btn btn-warning"><i class="las la-pencil-alt"></i></button>
                                <button id="delete" onclick="return confirmation({{ $detail->id }});" type="button" class="btn btn-danger"><i class="las la-trash-alt"></i></button>

                                <form method="POST" id="delete-form{{ $detail->id }}" action="{{ route('salesorderdetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                    @method('DELETE')
                                    @csrf
                                    {{-- <button type="submit" class="btn btn-danger"><i class="las la-trash-alt"></i></button> --}}
                                </form>
                                {{-- @if (backpack_user()->hasRole('operator-gudang'))
                                    @if ($detail->status == 0)
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Status
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-detail" onclick="accept('{{ $detail->id }}')" href="#">Setujui</a>
                                            <a class="dropdown-detail" onclick="decline('{{ $detail->id }}')" href="#">Tolak</a>
                                        </div>
                                    </div>
                                    @endif
                                @endif --}}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr style="border-bottom: 1px solid black;">
                        <td colspan="10" align="center">Belum ada data</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
</div>

@section('after_scripts')
<script>

    function confirmation(detailID) {
        if (confirm('Yakin hapus?')) {
            document.getElementById('delete-form'+detailID).submit();
        }else{
            return false;
        }
    }


    function edit(sales_order_id) {
        $.ajax({
            type: "post",
            url: "{{ backpack_url('Api/SalesOrderDetail') }}",
            data: {
                sales_order_id: sales_order_id,
                _token: '{{ csrf_token() }}'
            },
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    var dsc = 0;
                    $('#editModalSalesOrderDetail').modal('show');
                    $('#price').val(response.data.price)
                    $('input[name=qty]').val(response.data.qty)
                    response.data.discount === null ? dsc = 0 : dsc = response.data.discount
                    $('input[name=discount]').val(dsc)
                    $('select[name=item_id]').val(response.data.item_id).trigger('change');
                }else{
                    swalError({
                        message: response.data.message,
                        response: response.data.error,
                    })
                }
            }
        });
    }

    $('#delete').click(function (e) { 
        e.preventDefault();
        
    });

    $('#form-edit-so-detail').submit(function(e) {
        e.preventDefault()

        var data = $(this).serialize()
		var method = $(this).attr('method')
		var action = $(this).attr('action')

        $.ajax({
            url: action,
			data: data,
			method: method,
			beforeSend: function() {
				// $('#edit-buton-so-detail').prop('disabled', true);
			},
            success: function (response) {
                console.log(response);
                if (response.success) {
                    swalSuccess(response.message)
                }else{
                    swalError(response.message)
                }
            }
        });
    });

    function swalError(message) {
        return swal({
                    title: 'Gagal!',
                    text: message,
                    icon: 'error'
                }).then(function () {
                    location.reload();
                })
    }

    function swalSuccess(message) {
        return swal({
                    title: 'Sukses!',
                    text: message,
                    icon: 'success'
                }).then(function () {
                    location.reload();
                })
    }
</script>

@endsection
