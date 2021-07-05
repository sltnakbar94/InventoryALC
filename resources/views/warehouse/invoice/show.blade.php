@extends(backpack_view('blank'))


@section('content')



<div class="container">
      <h4 style="text-align: center;margin-top:10px">More feature coming soon</h4>

      <div class="card-body" >
        <form action="{{ backpack_url('generate-invoice') }}" id="invoice-pdf" method="post" target="_blank">
            @csrf
            <input type="hidden" name="id" value=" {{ $crud->entry->id }} " id="invoice">
            <BUTton class="btn btn-success" style="width: 100%" type="submit">Generate invoice</BUTton>
        </form>
    </div>

    </div>

@endsection
{{-- @include('warehouse.invoice.pricemodal') --}}
@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
@endsection

@section('after_scripts')
	<script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('packages/backpack/crud/js/show.js') }}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection
