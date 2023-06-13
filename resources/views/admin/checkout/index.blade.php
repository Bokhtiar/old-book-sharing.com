@extends('layouts.admin.app')
@section('admin_container')
    
    {{-- checkout table --}}
    @component('components.table.order', [
        'checkouts' => @$checkouts,
    ])
        
    @endcomponent
@endsection
