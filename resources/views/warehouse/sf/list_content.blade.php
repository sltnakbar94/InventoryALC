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
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @if (count($crud->entry->details) != 0)
                    @foreach ($crud->entry->details as $key=>$detail)
                    @php
                        $status = array('Plan', 'Process', 'Denied', 'Complete');
                    @endphp
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$detail->item->name}}</td>
                        <td>{{$detail->item->serial}}</td>
                        <td>{{$detail->item->unit}}</td>
                        <td align="right">{{number_format($detail->qty)}}</td>
                        <td>{{$status[$detail->status]}}</td>
                        <td>
                            <div class="btn-group">
                                @if ($detail->status == 0)
                                <button id="edit" onclick="edit({{ $detail->id }})" type="button" class="btn btn-warning"><i class="las la-pencil-alt"></i></button>
                                <form method="POST" action="{{ route('submissionformdetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="las la-trash-alt"></i></button>
                                </form>
                                    <div class="btn-group" role="group">
                                        <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Status
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                            <a class="dropdown-detail" href="{{backpack_url('submissionformdetail/'.$detail->id.'/accept')}}">Setujui</a>
                                            <a class="dropdown-detail" href="{{backpack_url('submissionformdetail/'.$detail->id.'/denied')}}">Tolak</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr style="border-bottom: 1px solid black;">
                        <td colspan="9" align="center">Belum ada data</td>
                    </tr>
                @endif
            </table>
        </div>
    </div>
</div>

@section('after_scripts')
    <script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('packages/backpack/crud/js/show.js') }}"></script>
    <script>
        function edit(submission_form_detail_id) {
        $.ajax({
            type: "post",
            url: "{{ backpack_url('Api/SubmissionFormDetail') }}",
            data: {
                submission_form_detail_id: submission_form_detail_id,
                _token: '{{ csrf_token() }}'
            },
            dataType: "json",
            success: function (response) {
                if (response.success) {
                    console.log(response.data.id)
                    var dsc = 0;
                    $('#editModalSubmissionFormDetail').modal('show');
                    $('#submission_form_detail_id').val(response.data.id)
                    $('input[name=qty]').val(response.data.qty)
                    response.data.discount === null ? dsc = 0 : dsc = response.data.discount
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
    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
		$('.select2').select2({})
    } );
    </script>
@endsection
