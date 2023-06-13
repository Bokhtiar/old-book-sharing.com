@extends('layouts.admin.app')
@section('admin_container')

   {{-- user pending post table --}}
   @component('components.table.book',[
    'books' => @$books
   ])
       
   @endcomponent

@endsection
