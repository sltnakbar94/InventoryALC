<div class="card no-padding no-border">
  <div class="card-header">
    Tambah Barang Keluar
  </div>
  <div class="card-body">
    <form action="{{ backpack_url('item_to-bag') }}" id="item_to-bag" method="post">
      {!! Form::hidden('warehouse_out_id', $crud->entry->id, [null]) !!}
      <div class="form-group">
        <label>Pilih Item</label>
        <select name="item_id" class="form-control select2" required id="item_id">
          <option value="">- Pilih Item -</option>
          @foreach ($crud->fields()['items']['data'] as $item)
              <option value="{{ $item->id }}">{{ $item->id }} - {{ $item->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="">Kuantitas</label>
        {!! Form::number('qty', null, ['class' => 'form-control', 'required', 'id' => 'qty']) !!}
      </div>
      @if (backpack_user()->hasRole('operator-gudang'))
        {!! Form::submit('Update Item', ['class' => 'btn btn-success', 'id' => 'btn-submit']) !!}
      @else
        {!! Form::submit('Tambah Item', ['class' => 'btn btn-success', 'id' => 'btn-submit']) !!}
      @endif
     </form>
  </div>
</div>
