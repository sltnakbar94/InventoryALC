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
        <div class="">
            <div class="row">
                <div class="col-md-4">
                    <div class="card no-padding no-border">
                        <div class="card-header">
                            Tambah Barang Keluar
                        </div>
                        <div class="card-body">
                            <form action="{{ route('warehouseout.store') }}" method="post">
                                @csrf
                                @if(view()->exists('warehouse.out.form_content'))
                                    @include('warehouse.out.form_content', [ 'fields' => $crud->fields(), 'action' => 'create' ])
                                @else
                                    @include('crud::form_content', [ 'fields' => $crud->fields(), 'action' => 'create' ])
                                @endif
                                <div id="saveActions" class="form-group">
                                    <input type="hidden" name="save_action" value="save_and_back">
                                    <div class="btn-group" role="group">
                                        <button type="submit" class="btn btn-success">
                                            <span class="la la-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                            <span data-value="save_and_back">Save and back</span>
                                        </button>
                            
                                        <div class="btn-group" role="group">
                                            <button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span><span class="sr-only">▼</span></button>
                                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                <a class="dropdown-item" href="javascript:void(0);" data-value="save_and_edit">Save and edit this item</a>
                                                <a class="dropdown-item" href="javascript:void(0);" data-value="save_and_new">Save and new item</a>
                                                <a class="dropdown-item" href="javascript:void(0);" data-value="save_and_preview">Save and preview</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="http://inventory.local:88/admin/warehousein" class="btn btn-default"><span class="la la-ban"></span> &nbsp;Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card no-padding no-border">
                        <div class="card-header">
                            
                        </div>
                        <div class="card-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
	  </div>
	</div>
</div>
@endsection


@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
	
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
    
@endsection

@section('after_scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
@endsection
