@extends('layouts.admin.app')
@section('admin_container')

        {{-- book table --}}
        @component('components.table.book', [
            'books' => @$books,
        ])
        @endcomponent
 
@endsection
