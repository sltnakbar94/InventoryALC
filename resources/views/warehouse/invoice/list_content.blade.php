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
                    <th>Total Harga (sebelum Discount)</th>
                    <th>Total Harga (setelah Discount)</th>
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
                        <td>{{@$detail->discount}}%</td>
                        <td align="right">Rp. {{number_format(@$detail->price_sum)}}</td>
                        <td align="right">Rp. {{number_format(@$detail->price_after_discount)}}</td>
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
