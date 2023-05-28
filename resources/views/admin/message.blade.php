@extends('layouts.admin.app')
@section('admin_container')
    @component('components.table.message', [
        'messages' => @$messages,
    ])
        ;
    @endcomponent
@endsection
