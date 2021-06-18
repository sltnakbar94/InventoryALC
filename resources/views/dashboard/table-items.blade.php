{{-- <div class="row">
    <div class="col-md-12">
        <div class="table table-responsive">
            <table class="table table-bordered bg-white table-striped thead-light" style="width:100%;">
                <tr>
                    <th class="text-center text-light bg-info">No</th>
                    <th class="text-center text-light bg-info">Gudang</th>
                    <th class="text-center text-light bg-info">Nama Item</th>
                    <th class="text-center text-light bg-info">Brand</th>
                    <th class="text-center text-light bg-info">Category</th>
                    <th class="text-center text-light bg-info">Stock on Hand</th>
                    <th class="text-center text-light bg-info">Stock on Location</th>
                </tr>
                @foreach(@$items as $key=>$item)
                    <tr @if ($loop->odd) class="bg-secondary" @endif>
                        <td>{{ @$key+1 }}</td>
                        <td>{{ @$item->gudang->name }}</td>
                        <td>{{ @$item->item->name }}</td>
                        <td>{{ @$item->item->Brand->name }}</td>
                        <td>{{ @$item->item->Category->name }}</td>
                        <td>{{ @$item->stock_on_hand }}</td>
                        <td>{{ @$item->stock_on_location }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div> --}}
