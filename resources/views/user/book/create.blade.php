@extends('layouts.user.app')
@section('content')
    <section class="container">
        <nav aria-label="breadcrumb" style="background-color: #F2F4F4">
            <ol class="breadcrumb py-3 px-3">
                <li class="breadcrumb-item"><a style="text-decoration: none" href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Book create</li>
            </ol>
        </nav>
    </section>

    <section class=" container">
        <div class="card p-4">


            <form action="{{ url('user/book/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    {{-- title --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.input', [
                            'label' => 'Book name',
                            'name' => 'title',
                            'placeholder' => 'Book title type here',
                            'value' => @$edit ? @$edit->title : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- price --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.input', [
                            'label' => 'Book price',
                            'name' => 'price',
                            'placeholder' => 'Book price type here',
                            'value' => @$edit ? @$edit->price : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- Category --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.select', [
                            'id' => 'id',
                            'name' => 'category_id',
                            'resource' => $categories,
                            'field_id' => 'id',
                            'label' => 'Select category',
                            'field_name' => 'name',
                            'value' => @$edit ? @$edit->id : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- location --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.select', [
                            'id' => 'id',
                            'name' => 'location_id',
                            'resource' => $locations,
                            'field_id' => 'id',
                            'label' => 'Select category',
                            'field_name' => 'name',
                            'value' => @$edit ? @$edit->id : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- ISBN --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.input', [
                            'label' => 'Book ISBN',
                            'name' => 'ISBN',
                            'placeholder' => 'Book ISBN type here',
                            'value' => @$edit ? @$edit->ISBN : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- price --}}
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        @component('components.input', [
                            'label' => 'Book author',
                            'name' => 'author',
                            'placeholder' => 'Book author type here',
                            'value' => @$edit ? @$edit->author : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- image --}}
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        @component('components.input', [
                            'label' => 'Book image',
                            'name' => 'image',
                            'type' => 'file',
                            'placeholder' => '',
                            'value' => @$edit ? @$edit->image : '',
                        ])
                        @endcomponent
                    </div>

                    {{-- description --}}
                    <div>
                        <textarea class="form-control" class="p-2" name="description" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="text-center my-4">
                        <input type="submit" name="" class="btn btn-outline-success" value="Submit" id="">
                    </div>

                </div>
            </form>
        </div>


    </section>
@endsection
