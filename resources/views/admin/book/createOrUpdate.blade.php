@extends('layouts.admin.app')
@section('admin_container')
    @component('components.form.book', [
        'edit' => @$edit,
    ])
    @endcomponent
@endsection
