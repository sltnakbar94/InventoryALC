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
                    <th>Remarks</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @if (count($crud->entry->details) != 0)
                    @foreach ($crud->entry->details as $key=>$detail)
                    @php
                        $status = array('Plant', 'Process', 'Complete');
                        if ($crud->entry->module == 'sales_order') {
                            $item_header = $crud->entry->salesOrder;
                        }elseif ($crud->entry->module == 'delivery_order') {
                            $item_header = $crud->entry->WarehouseOut;
                        }else {
                            $item_header = NULL;
                        }
                        $comparison = $item_header->details->where('item_id', '=', $detail->item_id)->sum('qty');
                    @endphp
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$detail->item->name}}</td>
                        <td>{{$detail->item->serial}}</td>
                        <td>{{$detail->item->unit}}</td>
                        <td align="right">{{number_format($detail->qty)}}</td>
                        @if ($detail->qty > $comparison)
                            <td><strong style="background-color: red; color:white">Jumlah Melebihi Stock</strong></td>
                        @else
                            <td align="center"> - </td>
                        @endif
                        <td>{{$status[$detail->status]}}</td>
                        <td>
                            <div class="btn-group">
                                <button onclick="edit({{ $detail->id }})" href="{{ route('salesorderdetail.edit', $detail->id) }}" type="button" class="btn btn-warning editModalSalesOrderDetail" data-toggle="modal" data-target="#editModalSalesOrderDetail"><i class="las la-pencil-alt"></i></button>
                                <form method="POST" action="{{ route('salesorderdetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="las la-trash-alt"></i></button>
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
        function edit(params) {
            $.ajax({
                type: "post",
                url: "{{ backpack_url('Api/DeliverySODetail') }}",
                data: {

                },
                dataType: "dataType",
                success: function (response) {

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
