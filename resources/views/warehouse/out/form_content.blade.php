
<div class="form-group required" element="div"><label>Customer <span class="text-danger">*<span></label>
    {!! Form::text('customer_id', $fields['warehouse_out']['data']->customer->company, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Tujuan Pengiriman <span class="text-danger">*<span></label>
    <textarea style="width:100%; height:auto" class="form-control" readonly>{{$fields['warehouse_out']['data']->customer->address}}</textarea>
</div>
<div class="form-group required" element="div"><label>Nomor Referensi <span class="text-danger">*<span></label>
    {!! Form::text('ref_no', $fields['warehouse_out']['data']->ref_no, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Date Out <span class="text-danger">*<span></label>
    {!! Form::date('date_out', $fields['warehouse_out']['data']->date_out, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Description <span class="text-danger">*<span></label>
    {!! Form::textarea('description', $fields['warehouse_out']['data']->description, ['class' => 'form-control', 'readonly']) !!}
</div>

@if ($fields['flag_approval']['data'])
    <a href="{{ backpack_url('deliverynote', ['id' => $fields['warehouse_out']['data']]) }}">Generate Delivery Note</a>
@endif
