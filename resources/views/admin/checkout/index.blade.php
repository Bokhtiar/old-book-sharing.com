@extends('layouts.admin.app')
@section('admin_container')

@component('components.table.order',[
  'checkouts' => @$checkouts,
]);
  
@endcomponent

@endsection
