@extends('layouts.admin.app')
@section('admin_container')

    {{-- book create update form --}}
    @component('components.form.book', [
        'categoriesList' => @$categoriesList,
        'edit' => @$edit,
    ])
    @endcomponent
    
@endsection
