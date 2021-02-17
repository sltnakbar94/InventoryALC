
<div class="form-group required" element="div"><label>Customer <span class="text-danger">*<span></label>
    {!! Form::text('customer_id', $fields['warehouse_in']['data']->supplier->name, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Delivery Notes <span class="text-danger">*<span></label>
    {!! Form::text('delivery_note', $fields['warehouse_in']['data']->delivery_note, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Date In <span class="text-danger">*<span></label>
    {!! Form::date('date_in', $fields['warehouse_in']['data']->date_in, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Nomor Referensi<span class="text-danger">*<span></label>
    {!! Form::text('ref_no', $fields['warehouse_in']['data']->ref_no, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Description <span class="text-danger">*<span></label>
    {!! Form::textarea('description', $fields['warehouse_in']['data']->description, ['class' => 'form-control', 'readonly']) !!}
</div>
