@extends('layouts.admin.app')
@section('admin_container')
    {{-- book detils information --}}
    @component('components.breadcrumbs',[
        'name' => "Book details information"
    ])
        
    @endcomponent
    <section class="">
        <div class="row card">
            <div class="">
                <h3 class="text-center">Details Informaton Book Of {{ $show->title }}</h3>

                <div class="row my-5 text-center">

                    <div class="col-md-4 col-sm-12">
                        <h6 class="text-center">Details Informaton Book Of {{ $show->title }}</h6>
                        <div>
                            <img height="400px" width="100%" src="{{ asset($show->image) }}" alt="">
                        </div>
                        <p>{{ $show->title }}</p>
                    </div>

                    <div class="col-md-8 col-sm-12">

                        <div>
                            <h3>Details Information</h3>
                            <p>Book ISBN : {{ $show->ISBN }}</p> <br>
                            <p>Book Category : {{ $show->category ? $show->category->name : "Data not found" }}</p> <br>
                            <p>Book Location : {{ $show->location ? $show->location->name : "Data not found" }}</p> <br>
                            <p>Book Author : {{ $show->author }}</p> <br>
                            <p>Book Price : {{ $show->price }}</p> <br>
                            <p>Book Description : {{ $show->description }}</p> <br>

                        </div>
                    </div>

                </div>
                <a class="btn btn-info" href="@route('admin.book.index')">Back</a>
            </div>
        </div>
    </section>
@endsection
