<div class="row">
    <div class="col-md-12">
        <table id="tableItem" class="display nowrap" style="width:100%">
            <thead>
                <tr class="bg-primary">
                    <th>No.</th>
                    <th>nama Item</th>
                    <th>SKU</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            @php
                $json = json_decode($crud->entry->goods);
            @endphp
            @if (count($json) != 0)
                @foreach ($json as $key=>$detail)
                    @php
                        $item = \App\Models\Item::where('serial', '=', $detail->material_code)->first();
                    @endphp
                    <tbody>
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{@$item->name}}</td>
                            <td>{{@$item->serial}}</td>
                            <td align="right">{{number_format($detail->qty)}}</td>
                        </tr>
                    </tbody>
                @endforeach
            @else
                <tr style="border-bottom: 1px solid black;">
                    <td colspan="9" align="center">Belum ada data</td>
                </tr>
            @endif
        </table>
    </div>
</div>
