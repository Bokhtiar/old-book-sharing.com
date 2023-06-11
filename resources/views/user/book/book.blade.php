@extends('layouts.user.app')
@section('content')

<style>
    .polaroid{

padding: 10px;
box-shadow: 5px 5px 15px 6px #d4d4d4;
height: 280px;
text-align: center;
}
.polaroid-hover{
padding: 10px;
box-shadow: 5px 5px 15px 6px #d4d4d4;
height: 420px;
text-align: center;
}
a{
    text-decoration: none;
}
</style>
<section class="container my-5">
  <nav aria-label="breadcrumb" style="background-color: #F2F4F4">
    <ol class="breadcrumb py-3 px-3">
      <li class="breadcrumb-item"><a style="text-decoration: none"  href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Book</li>
    </ol>
  </nav>


    <div class="row">
        <div class="col-md-5 col-sm-12 col-lg-5">
            <div class="container polaroid-hover">
                <img src="{{ asset($book->image) }}" height="400px" width="100%" alt="">
            </div>
        </div>
        <div class="col-md-7 col-sm-12 col-lg-7">
            <h4>{{ $book->title }} &nbsp;Detials</h4>
            <h5 class="text-success">{{ $book->price }} TK</h5>
            <h6 class="">ISBN : {{ $book->ISBN }}</h6>
            <div  style="" class="my-5">
                <a style="background-color:#2e86de" class="btn btn-sm text-light" href="{{ url('user/cart',$book->id) }}">Add To Card</a>
            </div>

            <div class="my-5">
                <span class="">Category : {{ $book->category->name }}</span><br><br>
                <span class="">Author : {{ $book->author }} </span><br><br>
                <span>Description: {{ $book->description }}</span>
            </div>
        </div>
    </div>
</section>


<section class="container">
  <div class="d-flex justify-content-between shadow-sm  px-4 py-2">
    <h2>All book</h2>
    <span class="mt-2"><i class="btn btn-sm btn-outline-success p-1 fas fa-list"></i>  <i class="btn btn-sm btn-outline-success p-1 far fa-list-alt"></i></span>
  </div>

  <div class="row">
    <div class="col-sm-12 col-md-9 col-lg-9">
      <div class="row p-2">
        @foreach ($books as $book)
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
        @endforeach
      </div>
    </div>
  </div>
</section>

@endsection
