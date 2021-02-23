
<form action="{{ backpack_url('item_to-bag_in') }}" id="item_to-bag" method="post">
    {!! Form::hidden('warehouse_in_id', $crud->entry->id, [null]) !!}
    <div class="form-group">
        <label>Pilih Item</label>
        <select name="item_id" class="form-control select2" required id="item_id">
            <option value="">- Pilih Item -</option>
            @foreach (App\Models\Item::get() as $item)
                <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="">Kuantitas</label>
        {!! Form::number('qty', null, ['class' => 'form-control', 'required', 'id' => 'qty']) !!}
    </div>
    <div class="form-group">
        <label for="">Harga Satuan (Rp)</label>
        {!! Form::number('price', null, ['class' => 'form-control', 'required', 'id' => 'price']) !!}
    </div>
    {{-- @if (backpack_user()->hasAnyRole(['operator-office', 'admin', 'superadmin'])) --}}
        {!! Form::submit('Tambah Item', ['class' => 'btn btn-success', 'id' => 'btn-submit']) !!}
    {{-- @endif --}}
</form>
