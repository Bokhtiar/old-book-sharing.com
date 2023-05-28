@extends('layouts.admin.app')
@section('admin_container')
    
    @component('components.breadcrumbs', [
        'name' => 'All Categories',
    ])
    @endcomponent

    <section class="row">
        {{-- table --}}
        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @component('components.table.category', [
                        'categories' => @$categories,
                    ])
                    @endcomponent
                </div>
            </div>
        </div>

        {{-- form --}}
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    @component('components.form.category', [
                        'edit' => @$edit,
                    ])
                    @endcomponent
                </div>
            </div>
        </div>

    </section>
@endsection
