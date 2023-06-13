@extends('layouts.admin.app')
@section('admin_container')

        @component('components.breadcrumbs', [
            'name' => 'All Categories',
        ])
        @endcomponent

        {{-- table --}}
        @component('components.table.book',[
            'books' => @$books,
        ]);
        @endcomponent     


@endsection
