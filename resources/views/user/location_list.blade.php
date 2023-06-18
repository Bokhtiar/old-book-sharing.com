@extends('layouts.user.app')
@section('content')



<section class="container">
    <nav aria-label="breadcrumb" style="background-color: #F2F4F4">
        <ol class="breadcrumb py-3 px-3">
          <li class="breadcrumb-item"><a style="text-decoration: none"  href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Location</li>
        </ol>
      </nav>


    <div class="row">
        <div class="col-sm-12 col-md-3 col-lg-3 p-2 my-4">
          <ul class="list-group">
            <li class="list-group-item bg-success text-white"> All Location </li>
            @foreach ($locations as $location)
              <li class="list-group-item"> <a class="dropdown-item" href="{{ url('location',$location->id) }}">{{ $location->name }}</a> </li>    
            @endforeach
          </ul>
        </div>
        {{-- book show --}}
        <div class="col-sm-12 col-md-9 col-lg-9">
          <div class="row p-2">
    
            @forelse ($books as $book)
            @component('components.product',[
                  'id' => $book->id,
                  'title' => $book->title,
                  'image' => $book->image,
                  'price' => $book->price,
                  'author' => $book->author,
                ])
                @endcomponent
            @empty
                <img height="500" width="100%" src="{{ asset('image/four0four') }}" alt="">
            @endforelse
    
           
          </div>
        </div>
    
        
      </div>
</section>
@endsection
