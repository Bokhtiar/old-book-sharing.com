@extends('layouts.user.app')
@section('content')
    <section>
        <!--start of slider-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('frontend/image/4.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/image/8.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('frontend/image/7.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section><!-- end of slider-->


    <style>
        .zoom {
          transition: transform .2s; /* Animation */
        }
        
        .zoom:hover {
          transform: scale(0.9); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }
        </style>
    <section class="my-5 container">
         <!--books-->
         <div class="d-flex justify-content-between shadow-sm  px-4 py-2">
            <h2 class="text-muted">Categories</h2>
            <span class="mt-2"><i class="btn btn-sm btn-outline-success p-1 fas fa-list"></i> <i
                    class="btn btn-sm btn-outline-success p-1 far fa-list-alt"></i></span>
        </div>
        <section class="row p-4">
            @foreach ($categories as $cat)
                <div class="col-sm-6 col-md-2 col-lg-2 my-2 text-center ml-2 zoom"
                    style="box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;">
                    <img src="{{ asset($cat->image) }}" height="160px" width="100%" class="p-3" alt="">
                    <div class="mb-2 text-muted"><a href="{{url('category', $cat->id)}}">{{ $cat->name }}</a></div>
                </div>
            @endforeach
        </section>
    </section>

    <section class="  my-5 container">
        <div class="row">
            @foreach ($homeCategories as $item)
                <div class=" rounded col-sm-12 col-md-4 col-lg-4 border border-1" style="margin:4px">

                    <div class="row">
                        <h2 class="rounded text-center text-white py-3 " style="background-color: #85929E">{{ $item->name }}</h2>
                        @foreach (App\Models\Category::categoryBook($item->id) as $book)
                            {{-- book show start here --}}
                            <div class="col-md-2 col-lg-2 ">
                                <img class="mx-auto" height="64px" width="48px" src="{{ asset($book->image) }}"
                                    alt="">
                            </div>
                            <div class="col-md-10 col-lg-10">
                                <span>{{ $book->title }}</span><br>
                                <span>{{ $book->author }}</span><br>
                                <span><span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style=" font-size:10px"></span></span>
                            </div>
                            <hr>
                            {{-- book show end here --}}
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </section>



    <section class="my-5 container">
        <!--books-->
        <div class="d-flex justify-content-between shadow-sm  px-4 py-2">
            <h2>All book</h2>
            <span class="mt-2"><i class="btn btn-sm btn-outline-success p-1 fas fa-list"></i> <i
                    class="btn btn-sm btn-outline-success p-1 far fa-list-alt"></i></span>
        </div>
            {{-- book show --}}
                <div class="row p-2">
                    @foreach ($books as $book)
                        <div class="col-sm-6 col-6 col-md-3 col-lg-3  my-4 rounded-lg zoom">
                            <div class=" shadow p-3" style="width: 100%; margin-left:0px;">
                                <a href="{{ url('book/detail', $book->id) }}">
                                    <img height="250px" width="100%" src="{{ asset($book->image) }}"
                                        class="card-img-top p-2" alt="...">
                                </a>
                                <div class="card-body d-flex justify-content-between pt-2">
                                    <p class="card-text text-capitalize h6"><a
                                            href="{{ url('book/detail', $book->id) }}" style="text-decoration: none">{{ $book->title }}</a> </p>
                                    <span>{{ $book->price }}Tk</span>
                                </div>
                                <div class="text-center">
                                    <span class="">{{$book->author}}</span><br>
                                    <span><span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                                    <span class="fa fa-star" style=" font-size:10px"></span></span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    </section><!-- end of book-->


    <div class="container my-5 zoom p-5 " style="background-color: #EBEDEF">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h1 class="mb-3">Contact Us</h1>
            <form action="{{ url('message') }}" method="POST">
                @csrf
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="your-name" class="form-label">Your Name</label>
                  <input name="name" type="text" class="form-control" id="your-name" name="your-name" required>
                </div>
                <div class="col-md-6">
                  <label for="your-email" class="form-label">Your Email</label>
                  <input name="email" type="email" class="form-control" id="your-email" name="your-email" required>
                </div>
                <div class="col-md-12">
                  <label for="your-subject" class="form-label">Your Subject</label>
                  <input name="subject" type="text" class="form-control" id="your-subject" name="your-subject">
                </div>
                <div class="col-12">
                  <label for="your-message" class="form-label">Your Message</label>
                  <textarea name="message" class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
                </div>
                <div class="col-12 text-center">
                  
                      <button type="submit" class="btn btn-dark  fw-bold" >Send</button>
                    
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      



@endsection
