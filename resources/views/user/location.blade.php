@extends('layouts.user.app')
@section('content')

<section class="container">
  <nav aria-label="breadcrumb" style="background-color: #F2F4F4">
      <ol class="breadcrumb py-3 px-3">
        <li class="breadcrumb-item"><a style="text-decoration: none"  href="{{url('/')}}">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Book</li>
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
          <div class="col-sm-6 col-6 col-md-3 col-lg-3  my-4 rounded-lg" >
            <div class=" shadow p-3" style="width: 100%; margin-left:0px;" >
              <a href="{{ url('book/detail',$book->id) }}">
                  <img height="250px" width="100%" src="{{ asset($book->image) }}" class="card-img-top p-2"  alt="...">
              </a>
              <div class="card-body d-flex justify-content-between pt-2">
                <p class="card-text text-capitalize h6"><a href="{{ url('book/detail',$book->id) }}">{{ $book->title }}</a> </p>
                <span>{{$book->price}}Tk</span>
              </div>
            </div>
          </div>
          @empty
              <img height="500" width="100%" src="{{ asset('image/four0four') }}" alt="">
          @endforelse
  
         
        </div>
      </div>
  
      
    </div>
</section>
@endsection
