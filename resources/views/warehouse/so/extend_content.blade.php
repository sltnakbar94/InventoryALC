<div class="form-group required" element="div"><label>Customer <span class="text-danger">*<span></label>
    {!! Form::text('customer_id', $crud->entry->customer->company, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Tujuan Pengiriman <span class="text-danger">*<span></label>
    <textarea style="width:100%; height:auto" class="form-control" readonly>@if (!empty($crud->entry->destination)){{$crud->entry->destination}}@else{{$crud->entry->customer->address}}@endif</textarea>
</div>
<form action="{{ backpack_url('inbound-att') }}" id="inbound-att" method="post">
    @csrf
    {!! Form::hidden('id', $crud->entry->id, [null]) !!}
    @php
        $pics = json_decode($crud->entry->customer->pic);
    @endphp
    <div class="form-group">
        <label>Pilih PIC</label>
        <select name="pic" class="form-control select2" required id="pic">
          <option value="">- Pilih Item -</option>
          @foreach ($pics as $pic)
              <option value="{{ $pic->name }}">{{ $pic->name }} - {{ $pic->email }} - {{ $pic->telp }}</option>
          @endforeach
        </select>
      </div>
    {!! Form::submit('Pilih PIC', ['class' => 'btn btn-success', 'id' => 'btn-submit']) !!}
</form>
