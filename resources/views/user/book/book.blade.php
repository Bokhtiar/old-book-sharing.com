@extends('layouts.user.app')
@section('content')


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
                <a style="background-color:#2e86de" class="btn btn-sm text-light" href="{{ url('user/cart',$book->id) }}">Add To Cart</a>
            </div>

            <div class="my-5">
                <span class="">Category : {{ $book->category->name }}</span><br><br>
                <span class="">Author : {{ $book->author }} </span><br><br>
                <span class="">Location : {{ $book->location }} </span><br><br>
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

        @foreach ($books as $book)
        @component('components.product',[
                  'id' => $book->id,
                  'title' => $book->title,
                  'image' => $book->image,
                  'price' => $book->price,
                  'author' => $book->author,
                ])
                @endcomponent
        @endforeach
  </div>
</section>

@endsection
