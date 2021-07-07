@if (!empty($crud->entry->termin))
    @php
        $termins = json_decode($crud->entry->termin);
    @endphp
    @if (count($termins) > 0)
        @foreach ($termins as $termin)
            <div class="container">
                <div class="card-body" >
                <form action="{{ backpack_url('generate-invoice') }}" id="invoice-pdf" method="post" target="_blank">
                    @csrf
                    <input type="hidden" name="pay_of" value=" {{ $termin->pay_of }} " id="pay_of">
                    <input type="hidden" name="due_date" value=" {{ $termin->due_date }} " id="due_date">
                    <input type="hidden" name="id" value=" {{ $crud->entry->id }} " id="invoice">
                    <button class="btn btn-success" style="width: 100%" type="submit">Generate invoice termin ({{$termin->termin_no}}) Rp. {{number_format($termin->pay_of)}}</button>
                </form>
                </div>
            </div>
        @endforeach
    @else
        <div class="container">
            <div class="card-body" >
            <form action="{{ backpack_url('generate-invoice') }}" id="invoice-pdf" method="post" target="_blank">
                @csrf
                <input type="hidden" name="id" value=" {{ $crud->entry->id }} " id="invoice">
                <button class="btn btn-success" style="width: 100%" type="submit">Generate invoice</button>
            </form>
            </div>
        </div>
    @endif
@else
    <div class="container">
        <div class="card-body" >
        <form action="{{ backpack_url('generate-invoice') }}" id="invoice-pdf" method="post" target="_blank">
            @csrf
            <input type="hidden" name="id" value=" {{ $crud->entry->id }} " id="invoice">
            <button class="btn btn-success" style="width: 100%" type="submit">Generate invoice</button>
        </form>
        </div>
    </div>
@endif
