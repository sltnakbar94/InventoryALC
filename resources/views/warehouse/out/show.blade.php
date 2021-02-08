@extends(backpack_view('blank'))

@php
  $defaultBreadcrumbs = [
    trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
    $crud->entity_name_plural => url($crud->route),
    trans('backpack::crud.preview') => false,
  ];

  // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
  $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
	<section class="container-fluid d-print-none">
    	<a href="javascript: window.print();" class="btn float-right"><i class="la la-print"></i></a>
		<h2>
	        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
	        <small>{!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}</small>
	        @if ($crud->hasAccess('list'))
	          <small class=""><a href="{{ url($crud->route) }}" class="font-sm"><i class="la la-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
	        @endif
	    </h2>
    </section>
@endsection

@section('content')

<div class="row">
	<div class="col-md-12">

	<!-- Default box -->
	  <div class="">
	  	@if ($crud->model->translationEnabled())
	    <div class="row">
	    	<div class="col-md-12 mb-2">
				<!-- Change translation button group -->
				<div class="btn-group float-right">
				  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    {{trans('backpack::crud.language')}}: {{ $crud->model->getAvailableLocales()[request()->input('locale')?request()->input('locale'):App::getLocale()] }} &nbsp; <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				  	@foreach ($crud->model->getAvailableLocales() as $key => $locale)
					  	<a class="dropdown-item" href="{{ url($crud->route.'/'.$entry->getKey().'/show') }}?locale={{ $key }}">{{ $locale }}</a>
				  	@endforeach
				  </ul>
				</div>
			</div>
	    </div>
	    @else
	    @endif
        <div class="card no-padding no-border">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h6 class="text-right">No Surat Jalan: <strong>{{ $crud->entry->delivery_note }}</strong></h6><br>
                    </div>
                    <div class="col-md-6">
                        <h6 class="text-right">Tanggal Masuk: <strong>{{ date('d-m-Y', strtotime($crud->entry->date_in)) }}</strong></h6><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table">
                            <table class="table no-border">
                                <tr>
                                    <td>Nama Customer</td>
                                    <td><strong>{{ $crud->entry->customer->name }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><strong>{{ $crud->entry->customer->email }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><strong>{{ $crud->entry->customer->address }}</strong></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td><strong>{{ $crud->entry->customer->contact_number }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td><textarea readonly style="font-weight: bold; border: none">{{ $crud->entry->description }}</textarea></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModalOutDetail">
                            <i class="fa fa-plus"></i> TAMBAH BARANG
                            </button>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card no-padding no-border">
            <div class="card-header">

            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table">
                            <table class="table table-responsive">
                                <tr>
                                    <th>Nomor</th>
                                    <th>Item</th>
                                    <th>Satuan</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Catatan</th>
                                    <th>Action</th>
                                </tr>
                                @if(isset($crud->entry->warehouseOut))
                                    @php
                                    $total = 0;
                                    @endphp
                                    @foreach($crud->entry->warehouseOut as $od)
                                    @php
                                    $total += $od->qty;
                                    @endphp
                                    <tr>
                                        <td>{{ $od->id }}</td>
                                        <td>{{ $od->name }}</td>
                                        <td>{{ number_format($od->qty) }}</td>
                                        <td>{{ $od->created_at->format('d-m-Y') }}</td>
                                        {{-- <td>{!! $od->status_order == 0 ? '<span class="badge badge-warning">PRE-ORDER</span>' : '<span class="badge badge-success">POD</span>' !!}</td>
                                        <td>{!! $od->status_terima == 1 ? '<span class="badge badge-success">Delivered</span>' : '<span class="badge badge-primary">On Delivery</span>' !!}</td> --}}
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a target="_blank" href="{{ route('orderdetail.show-qrcode', $od->url) }}" class="btn btn-primary">CETAK QRCODE</a>
                                                <a id="{{ route('orderdetail.edit', $od->id) }}" href="{{ route('orderdetail.update', $od->id) }}" class="btn btn-warning editModalOrderDetail" data-toggle="modal" data-target="#editModalOrderDetail">EDIT</a>
                                                @if($od->status_terima != 1)
                                                <form method="POST" action="{{ route('orderdetail.destroy', $od->id) }}" class="js-confirm" data-confirm="Apakah anda yakin ingin menghapus data ini?">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger">DELETE</button>
                                                </form>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <th>TOTAL</th>
                                        <th>{{ $total }}</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @else
                                <tr>
                                    <td colspan="5" class="text-center">Belum ada data order</td>
                                </tr>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	  </div>
	</div>
</div>
@include('warehouse.out.add-modal')
@endsection


@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
@endsection
@section('after_scripts')
	<script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
	<script src="{{ asset('packages/backpack/crud/js/show.js') }}"></script>

<script>
$(document).ready(function(){
    $('body').on('submit', '#out_detail_add', function(e){
        e.preventDefault();

        $('#add-buton-out').attr('disabled', true)

        var url = $(this).attr('action');

        $.ajax({
            url: url,
            type: 'POST',
            dataType: 'json',
            data: $(this).serialize(),
            success:function(response){
                if(response.success) {
                    // close modal
                    // show notification
                    // reload
                    $("#out_detail_add").trigger('reset');
                    $("#addModalOutDetail").modal('hide');
                    window.open(response.url, '_blank');
                    window.location.reload();
                }
            },
            error:function(xhr, responseText, throwError){
                if(xhr.responseJSON.success === false) {
                    $('#form-modal-alert').show();
                    $('#form-modal-alert').html(xhr.responseJSON.message);
                    $('#add-buton-kolam').attr('disabled', false)
                }
            },
        });

        return false;
    })
});
</script>
@endsection
