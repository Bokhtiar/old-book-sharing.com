@extends('layouts.admin.app')
@section('admin_container')

   @component('components.table.book',[
    'books' => @$books
   ])
       
   @endcomponent

@endsection
