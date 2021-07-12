<div class="row">
    <div class="col-md-12">
        <table id="tableItem" class="display nowrap" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center text-light bg-info">No</th>
                    <th class="text-center text-light bg-info">Gudang</th>
                    <th class="text-center text-light bg-info">Nama Item</th>
                    {{-- <th class="text-center text-light bg-info">Brand</th>
                    <th class="text-center text-light bg-info">Category</th> --}}
                    <th class="text-center text-light bg-info">Stock on Hand</th>
                    <th class="text-center text-light bg-info">Stock on Location</th>
                    <th class="text-center text-light bg-info">Brand</th>
                    <th class="text-center text-light bg-info">Netto</th>
                    <th class="text-center text-light bg-info">Weight on Location</th>
                    <th class="text-center text-light bg-info">Expired Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach(@$items as $key=>$item)
                    <tr @if ($loop->odd) class="bg-secondary" @endif>
                        <td>{{ @$key+1 }}</td>
                        <td>{{ @$item->gudang->name }}</td>
                        <td>{{ @$item->item->name }}</td>
                        {{-- <td>{{ @$item->item->Brand->name }}</td>
                        <td>{{ @$item->item->Category->name }}</td> --}}
                        <td>{{ number_format(@$item->stock_on_hand) }}</td>
                        <td>{{ number_format(@$item->stock_on_location) }}</td>
                        <td>{{ @$item->item->Brands->name}} </td>
                        <td> {{@$item->item->netto}} KG </td>
                        <td> {{@$item->item->netto*@$item->stock_on_location}} KG </td>
                        <td>{{ @$item->item->expirate_date }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
