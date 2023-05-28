@extends('layouts.admin.app')
@section('admin_container')

    {{-- message table --}}
    @component('components.table.message', [
        'messages' => @$messages,
    ])
        
    @endcomponent
@endsection
