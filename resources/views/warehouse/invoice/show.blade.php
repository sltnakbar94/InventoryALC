@extends(backpack_view('blank'))


@section('content')



<div class="container">

    <table class="table table-hover mt-5">
        <thead>
          <tr>
            <th scope="col">NO</th>
            <th scope="col">Name</th>
            <th scope="col">Qty</th>
            <th scope="col">Jumlah/Kg(Netto)</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah(Rp)</th>
          </tr>
        </thead>
        <tbody>
            @php
            $i = 0;
            foreach ($data['dn']->details as $item): $i++
            @endphp
          <tr>
            <th scope="row"><?= $i ?> </th>
            <td>{{ $item->Item['name']  }} </td>
            <td>{{ $item['qty'] }} </td>
            <td>{{ $item->Item['netto']  }} </td>
            <td>   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPrice">
                <i class="fa fa-plus"></i> TAMBAH ITEM
            </button> </td>

            <td> - </td>
      
          </tr>
            @php
             endforeach ;   
            @endphp
        </tbody>
      </table>

      

    </div>

@endsection
@include('warehouse.invoice.pricemodal')
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
