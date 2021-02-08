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
                                    <td>Nama Supplier</td>
                                    <td><strong>{{ $crud->entry->supplier->name }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><strong>{{ $crud->entry->supplier->email }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td><strong>{{ $crud->entry->supplier->address }}</strong></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td><strong>{{ $crud->entry->supplier->contact_number }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Keterangan</td>
                                    <td><strong>{{ $crud->entry->description }}</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                <div class="col-md-12">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModalinDetail">
                           <i class="fa fa-plus"></i> TAMBAH BARANG
                        </button>
                    <br><br>
                </div>
            </div>
            </div>
            </div>
        </div>
	  </div>
	</div>
</div>
@include('in.add-modal');
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
    $('body').on('submit', '#sales_form_detail_add', function(e){
        e.preventDefault();

        $('#add-buton-kolam').attr('disabled', true)

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
                    $("#sales_form_detail_add").trigger('reset');
                    $("#addModalSalesFormDetail").modal('hide');
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
