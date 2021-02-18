<div class="form-group required" element="div"><label>Customer <span class="text-danger">*<span></label>
    {!! Form::text('customer_id', $crud->entry->customer->company, ['class' => 'form-control', 'readonly']) !!}
</div>
<div class="form-group required" element="div"><label>Tujuan Pengiriman <span class="text-danger">*<span></label>
    <textarea style="width:100%; height:auto" class="form-control" readonly>@if (!empty($crud->entry->destination)){{$crud->entry->destination}}@else{{$crud->entry->customer->address}}@endif</textarea>
</div>
