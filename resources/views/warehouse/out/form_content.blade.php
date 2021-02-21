
<div class="form-group required" element="div"><label>Customer <span class="text-danger">*<span></label>
    {!! Form::text('customer_id', $crud->entry->customer->name, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Delivery Notes <span class="text-danger">*<span></label>
    {!! Form::text('delivery_note', $crud->entry->delivery_note, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Destination <span class="text-danger">*<span></label>
    {!! Form::text('delivery_note', $crud->entry->destination, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Date Out <span class="text-danger">*<span></label>
    {!! Form::date('date_out', $crud->entry->date_out, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Description <span class="text-danger">*<span></label>
    {!! Form::textarea('description', $crud->entry->description, ['class' => 'form-control', 'readonly']) !!}
</div>

@if ($fields['flag_approval']['data'])
    <a href="{{ backpack_url('deliverynote', ['id' => $crud->entry]) }}">Generate Delivery Note</a>
@endif
