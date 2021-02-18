@extends(backpack_view('blank'))

@section('content')

@include('dashboard.counter')
@include('dashboard.pie-chart')
@include('dashboard.table-items')

@endsection
