@extends('layouts.user.app')
@section('content')



<section class="container">    


  <nav aria-label="breadcrumb" style="background-color: #F2F4F4">
    <ol class="breadcrumb py-3 px-3">
      <li class="breadcrumb-item"><a style="text-decoration: none"  href="{{url('/')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Book</li>
    </ol>
  </nav>



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

</section>
@endsection
