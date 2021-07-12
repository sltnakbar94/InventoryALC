<div class="row">
    <div class="col-md-12">
        <div class="table">
            <table class="table table-responsive" style="width:100%">
                <tr class="bg-primary" align="center">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Discount</th>
                    <th>Total Harga</th>
                    <th>Actions</th>
                </tr>
                @if (count($crud->entry->details) != 0)
                    @foreach ($crud->entry->details as $key=>$detail)
                    @php
                        $status = array('Plan', 'Submited', 'Process', 'Denied', 'Complete', 'Revision');
                        $qty_onhands = \App\Models\Stock::where('warehouse_id', '=', $crud->entry->warehouse_id)->where('item_id', '=', $detail->item->id)->first();
                    @endphp
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$detail->item->name}}</td>
                        <td>{{$detail->item->serial}}</td>
                        <td align="right">{{number_format($detail->qty*$detail->item->netto)}} KG</td>
                        <td>{{@$detail->price}}</td>
                        <td>{{@$detail->discount}}</td>
                        <td>{{@$detail->price_sum}}</td>
                        <td>
                            <div class="btn-group">
                                <button id="edit" onclick="edit({{ $detail->id }})" type="button" class="btn btn-warning" style="height: 100%"><i class="las la-pencil-alt"></i></button>
                                <form id="delete-form{{ $detail->id }}" method="POST" action="{{ route('invoicedetail.destroy', $detail->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" style="height: 100%"><i class="las la-trash-alt"></i></button>
                                </form>
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
