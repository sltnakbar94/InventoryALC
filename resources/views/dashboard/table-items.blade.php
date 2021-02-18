<div class="row">
    <div class="col-md-12">
        <div class="table table-responsive">
            <table class="table table-bordered bg-white table-striped thead-light" style="width:100%;">
                <tr>
                    <th class="text-center text-light bg-info">No</th>
                    <th class="text-center text-light bg-info">Nama Item</th>
                    <th class="text-center text-light bg-info">Brand</th>
                    <th class="text-center text-light bg-info">Category</th>
                    <th class="text-center text-light bg-info">Qty</th>
                </tr>
                @foreach($items as $item)
                    <tr @if ($loop->odd) class="bg-secondary" @endif>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>{{ $item->category }}</td>
                        <td class="text-right">{{ number_format($item->qty) }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
