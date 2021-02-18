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
	<div class="col-md-4">

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
				Nomor PO : {{@$crud->entry->po_number}}
            </div>
            <div class="card-body">
				@if(view()->exists('warehouse.in.form_content'))
					@include('warehouse.in.form_content', [ 'fields' => $crud->fields(), 'action' => 'create' ])
				@else
					@include('crud::form_content', [ 'fields' => $crud->fields(), 'action' => 'create' ])
				@endif
            </div>
        </div>
        @if (!empty($crud->entry->customer_id))
            <div class="card no-padding no-border">
                <div class="card-header">
                    Nomor DN : {{@$crud->entry->delivery_note}}
                </div>
                <div class="card-body">
                    @include('warehouse.in.extend_content', [ 'fields' => $crud->fields(), 'action' => 'create' ])
                </div>
            </div>
        @endif
	  </div>
	</div>
	<div class="col-md-8">
		<div class="card-body">
			@if(view()->exists('warehouse.in.list_content'))
				@include('warehouse.in.item-to_bag')
				@include('warehouse.in.list_content', [ 'fields' => $crud->fields(), 'action' => 'create' ])
				@include('warehouse.in.call-output')
			@else
				@include('crud::form_content', [ 'fields' => $crud->fields(), 'action' => 'create' ])
			@endif
		</div>
	</div>
</div>
@endsection


@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">


@endsection

@section('after_scripts')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
		$('.select2').select2({})
    } );
	$('#item_to-bag').submit(function(e) {
		e.preventDefault()

		var t = $('table#example').DataTable();


		var data = $(this).serialize()
		var method = $(this).attr('method')
		var action = $(this).attr('action')

			$.ajax({
				url: action,
				data: data,
				method: method,
				beforeSend: function() {
					$('#btn-submit').prop('disabled', true);
				},
				success: function(response) {
					$('#btn-submit').prop('disabled', false);
					//If New Record
					console.log(response)
					if (response.code == 200) {
						var id = response.data.ItemOnBag.id
						var btn_action = '<div class="btn-group">'
											+'<button onclick="edit('+response.data.ItemOnBag.id+')" type="button" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></button>'
											+'<button onclick="hapus('+response.data.ItemOnBag.id+')" type="button" class="btn btn-primary"><i class="fas fa-trash-alt"></i></button>'
											+'<button onclick="accept('+response.data.ItemOnBag.id+')" type="button" class="btn btn-primary"><i class="fas fa-check"></i></button>'
										+'</div>'
						t.row.add([
							response.data.ItemOnBag.id,
							response.data.Item.name,
							response.data.ItemOnBag.qty,
							0,
							response.data.ItemOnBag.flag,
							btn_action
						]).draw(false)
					}else{
						//If Update Record
						console
						// location.reload();
					}
					swal(response.status, response.message, response.status);
				},
			})
	})

//Edit Item On Bag by ID
	function edit(id) {
		var url = "{{ backpack_url('item_on-bag_in') }}"
		$.ajax({
			type: "GET",
			url: url,
			data: {
				bag_item_warehouse_in_id: id
			},
			dataType: "json",
			success: function (response) {
				console.log(response)
				$('input#qty').val(response.qty);
				$('#item_id').val(response.item_id).trigger('change');
				// $('#item_id').select2('data', {id: response.item_id, a_key: response.item.name});
			}
		});
	}

//Delete Item On Bag by ID
	function hapus(id) {
		swal({
			title: "Yakin Hapus?",
			text: "Data yang sudah Anda Hapus dapat di isi kembali!",
			icon: "warning",
			buttons: [
				'Batal!',
				'Ya!'
			],
			dangerMode: true,
		}).then(function(isConfirm) {
			if (isConfirm) {
				$.ajax({
					type: "post",
					url: "{{ backpack_url('delete-item_on-bag_in') }}",
					data: {
						bag_item_warehouse_in_id: id
					},
					dataType: "json",
					success: function (response) {
						if (response.code == 200) {
							swal({
								title: 'Berhasil Hapus!',
								text: response.message,
								icon: response.status
							}).then(function () {
								location.reload();
							})
						}
					}
				});
			} else {
				swal("Batal", "Data Aman :)", "success").then(function () { location.reload() });
			}
    	})
	}

//Update Status from Submited to Accepted
	function accept(id) {
		swal({
			title: "Terima Barang",
			text: "Data yang sudah Anda Terima tidak dapat di edit kembali!",
			icon: "warning",
			buttons: [
				'Batal!',
				'Ya!'
			],
			dangerMode: true,
		}).then(function(isConfirm) {
			if (isConfirm) {
				$.ajax({
					type: "post",
					url: "{{ backpack_url('accept-po') }}",
					data: {
						id: id
					},
					dataType: "json",
					success: function (response) {
						if (response.code == 200) {
							swal({
								title: 'Berhasil Disetujui!',
								text: response.message,
								icon: response.status
							}).then(function () {
								location.reload();
							})
						}
					}
				});
			} else {
				swal("Batal", "Data Aman :)", "success").then(function () { location.reload() });
			}
    	})
	}

//Update Status from Submited to Decline
	function decline(id) {
		swal({
			title: "Tolak Barang",
			text: "Data yang sudah Anda Tolak tidak dapat di edit kembali!",
			icon: "warning",
			buttons: [
				'Batal!',
				'Ya!'
			],
			dangerMode: true,
		}).then(function(isConfirm) {
			if (isConfirm) {
				$.ajax({
					type: "post",
					url: "{{ backpack_url('decline-po') }}",
					data: {
						id: id
					},
					dataType: "json",
					success: function (response) {
						if (response.code == 200) {
							swal({
								title: 'Berhasil Ditolak!',
								text: response.message,
								icon: response.status
							}).then(function () {
								location.reload();
							})
						}
					}
				});
			} else {
				swal("Batal", "Data Aman :)", "success").then(function () { location.reload() });
			}
    	})
	}
</script>
@endsection
