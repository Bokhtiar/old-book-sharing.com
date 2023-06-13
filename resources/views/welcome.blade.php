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



    <section class="my-5 container">
        <div class="card">
            <div class="d-flex justify-content-between shadow-sm  px-4 py-2">
                <h2>Our Category List</h2>
                <span class="mt-2"><i class="btn btn-sm btn-outline-success p-1 fas fa-list"></i> <i
                        class="btn btn-sm btn-outline-success p-1 far fa-list-alt"></i></span>
            </div>
            <div class="card-body">
                 

        
        <section class="row">
            @foreach ($categories as $category)
                <div class="col-sm-6 col-md-2 col-lg-2">
                    <div class="card" style="width: 11rem;">
                        <img class="" style="height: 140px" src="{{ $category->image }}" alt="Card image cap">
                        <div class="card-body bg-success">
                            <a href="" class="text-white text-center" style="text-decoration: none">{{ $category->name }}</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </section>
    </div>
</div>
    </section>



    <section class="  my-5 container">
        <div class="row">
            @foreach ($homeCategories as $item)
                <div class="col-sm-12 col-md-4 col-lg-4 border border-2 py-2" style="margin:4px">
                    <h2 class="text-center bg-success text-white py-3">{{ $item->name }}</h2>
                    <div class="row mt-4">
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

        {{-- books with category --}}
        <div class="">
      
            {{-- book show --}}
            <div class="">
                <div class="row p-2">
                    @foreach ($books as $book)
                        <div class="col-sm-6 col-6 col-md-3 col-lg-3  my-4 rounded-lg">
                            <div class=" shadow p-3" style="width: 100%; margin-left:0px;">
                                <a href="{{ url('book/detail', $book->id) }}">
                                    <img height="250px" width="100%" src="{{ asset($book->image) }}"
                                        class="card-img-top p-2" alt="...">
                                </a>
                                <div class="card-body d-flex justify-content-between pt-2">
                                    <p class="card-text text-capitalize h6"><a
                                            href="{{ url('book/detail', $book->id) }}">{{ $book->title }}</a> </p>
                                    <span>{{ $book->price }}Tk</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </section><!-- end of book-->
@endsection
