@extends('layouts.admin.app')
@section('admin_container')

    @component('components.breadcrumbs', [
        'name' => 'All Location',
    ])
    @endcomponent

    <section class="row">
        {{-- table --}}
        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
            <div class="card">
                <div class="card-body">
                    @component('components.table.location', [
                        'locations' => @$locations,
                    ])
                    @endcomponent
                </div>
            </div>
        </div>

        {{-- form --}}
        <div class="col-12 col-sm-12 col-md-4 col-lg-4">
            <div class="card">
                <div class="card-body">
                    @component('components.form.location', [
                        'edit' => @$edit,
                    ])
                    @endcomponent
                </div>
            </div>
        </div>

    </section>
@endsection
