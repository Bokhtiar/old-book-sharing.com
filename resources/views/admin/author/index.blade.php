@extends('layouts.admin.app')
@section('admin_container')
    @component('components.breadcrumbs', [
        'name' => 'All Authors',
    ])
    @endcomponent

    <div class="card">
        <div class="card-body">
            @component('components.table.author', [
                'authors' => @$authors,
            ])
            @endcomponent
        </div>
    </div>



    </section>
@endsection
