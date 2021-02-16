
<div class="form-group required" element="div"><label>Customer <span class="text-danger">*<span></label>
    {!! Form::text('customer_id', $fields['warehouse_out']['data']->customer->name, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Delivery Notes <span class="text-danger">*<span></label>
    {!! Form::text('delivery_note', $fields['warehouse_out']['data']->delivery_note, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Destination <span class="text-danger">*<span></label>
    {!! Form::text('delivery_note', $fields['warehouse_out']['data']->destination, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Date Out <span class="text-danger">*<span></label>
    {!! Form::date('date_out', $fields['warehouse_out']['data']->date_out, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Description <span class="text-danger">*<span></label>
    {!! Form::textarea('description', $fields['warehouse_out']['data']->description, ['class' => 'form-control', 'readonly']) !!}
</div>

@if ($fields['flag_approval']['data'])
    <a href="{{ backpack_url('') }}"></a>
@endif
