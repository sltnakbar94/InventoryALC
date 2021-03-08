<div class="row">
    <div class="col-md-12">
        <div class="table">
            <table class="table table-responsive" style="width:100%">
                <tr class="bg-primary">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>Jumlah</th>
                    <th>UoM</th>
                    <th>Remarks</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                @if (count($crud->entry->details) != 0)
                    @foreach ($crud->entry->details as $key=>$detail)
                    @php
                        $status = array('Plan', 'Submited', 'Process', 'Denied', 'Complete');
                        $comparison = $crud->entry->SalesOrder->details->where('item_id', '=', $detail->item_id)->sum('qty');
                    @endphp
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$detail->item->name}}</td>
                        <td>{{$detail->item->serial}}</td>
                        <td align="right">{{number_format($detail->qty)}}</td>
                        <td>{{$detail->item->uom->name}}</td>
                        @if ($detail->qty > $comparison)
                            <td><strong style="background-color: red; color:white">Jumlah Melebihi Stock</strong></td>
                        @else
                            <td align="center"> - </td>
                        @endif
                        <td>{{$status[$detail->status]}}</td>
                        <td>
                            <div class="btn-group">
                                @if ($detail->status != 4 && $detail->status != 3)
                                    <button onclick="edit({{ $detail->id }})" href="{{ route('deliverybysalesdetail.edit', $detail->id) }}" style="height: 100%" type="button" class="btn btn-warning editModalDeliveryBySalesDetail" data-toggle="modal" data-target="#editModalDeliveryBySalesDetail"><i class="las la-pencil-alt"></i></button>
                                    <form method="POST" action="{{ route('deliverybysalesdetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" style="height: 100%"><i class="las la-trash-alt"></i></button>
                                    </form>
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
