@extends('layouts.user.app')
@section('content')
<section><!--start of slider-->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset( 'frontend/image/4.jpg' ) }}"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/image/8.jpg') }}"  class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('frontend/image/7.jpg') }}"  class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section><!-- end of slider-->
<style>
    .polaroid{

    padding: 10px;
    box-shadow: 2px 2px 5px 2px #eee9e9;
    height: 350px;
    text-align: center;
    }
    a{
        text-decoration: none;
        color:black;
    }

    </style> 

          <section class="my-5 container"><!--books-->
           

            <div class="d-flex justify-content-between shadow-sm  px-4 py-2">
              <h2>All book</h2>
              <span class="mt-2"><i class="btn btn-sm btn-outline-success p-1 fas fa-list"></i>  <i class="btn btn-sm btn-outline-success p-1 far fa-list-alt"></i></span>
            </div>

            {{-- books with category --}}
            <div class="row">
              <div class="col-sm-12 col-md-3 col-lg-3 p-2 my-4">
                <ul class="list-group">
                  <li class="list-group-item bg-success text-white"> All categories </li>
                  @foreach ($categories as $category)
                    <li class="list-group-item"> <a class="dropdown-item" href="{{ url('category',$category->id) }}">{{ $category->name }}</a> </li>    
                  @endforeach
                </ul>
              </div>
              {{-- book show --}}
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
          </section><!-- end of book-->
@endsection
