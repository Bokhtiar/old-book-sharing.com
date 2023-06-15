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
 
.about-section{
  position: relative;
  padding: 120px 0 70px;
}

.about-section .sec-title{
  margin-bottom: 45px;
}

.about-section .content-column{
  position: relative;
  margin-bottom: 50px;
}

.about-section .content-column .inner-column{
  position: relative;
  padding-left: 30px;
}

.about-section .text{
  margin-bottom: 20px;
  font-size: 16px;
  line-height: 26px;
  color: #848484;
  font-weight: 400;
}

.about-section .list-style-one{
  margin-bottom: 45px;
}

.about-section .btn-box{
  position: relative;
}

.about-section .btn-box a{
  padding: 15px 50px;
}

.about-section .image-column{
  position: relative;
}

.about-section .image-column .text-layer{
    position: absolute;
    right: -110px;
    top: 50%;
    font-size: 325px;
    line-height: 1em;
    color: #ffffff;
    margin-top: -175px;
    font-weight: 500;
}

.about-section .image-column .inner-column{
  position: relative;
  padding-left: 80px;
  padding-bottom: 0px;
}
.about-section .image-column .inner-column .author-desc{
    position: absolute;
    bottom: 16px;
    z-index: 1;
    background: orange;
    padding: 10px 15px;
    left: 96px;
    width: calc(100% - 152px);
    border-radius: 50px;
}
.about-section .image-column .inner-column .author-desc h2{
    font-size: 21px;
    letter-spacing: 1px;
    text-align: center;
    color: #fff;
  margin: 0;
}
.about-section .image-column .inner-column .author-desc span{
    font-size: 16px;
    letter-spacing: 6px;
    text-align: center;
    color: #fff;
  display: block;
  font-weight: 400;
}
.about-section .image-column .inner-column:before{
    content: '';
    position: absolute;
    width: calc(50% + 80px);
    height: calc(100% + 160px);
    top: -80px;
    left: -3px;
    background: transparent;
    z-index: 0;
    border: 44px solid #00aeef;
}

.about-section .image-column .image-1{
  position: relative;
}
.about-section .image-column .image-2{
  position: absolute;
  left: 0;
  bottom: 0;
}

.about-section .image-column .image-2 img,
.about-section .image-column .image-1 img{
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
      border-radius: 46px;
}

.about-section .image-column .video-link{
  position: absolute;
  left: 70px;
  top: 170px;
}

.about-section .image-column .video-link .link{
  position: relative;
  display: block;
  font-size: 22px;
  color: #191e34;
  font-weight: 400;
  text-align: center;
  height: 100px;
  width: 100px;
  line-height: 100px;
  background-color: #ffffff;
  border-radius: 50%;
  box-shadow: 0 30px 50px rgba(8,13,62,.15);
  -webkit-transition: all 300ms ease;
  -moz-transition: all 300ms ease;
  -ms-transition: all 300ms ease;
  -o-transition: all 300ms ease;
  transition: all 300ms ease;
}

.about-section .image-column .video-link .link:hover{
  background-color: #191e34;
  color: #f
}
    </style>

    {{-- about us start here --}}
    <section class="about-section" id="about">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title text-success h5">About old book sharing</span>
                            <h2>Since 2020, we've been implementing old book sharing.</h2>
                        </div>
                        <div class="text">Since the past three years, I have worked at Old Book Sharing Transition as Imam Mehdi Hassan. We are here to provide top-notch solutions for your website or web application, assisting you in making your website appealing and manageable by providing the necessary plugins..
                        </div>
                        <div class="text">
                            A book description is a short summary of a book's story or content that is designed to “hook” a reader and lead to a sale. Typically, the book's description conveys important information about its topic or focus (in nonfiction) or the plot and tone (for a novel or any other piece of fiction)
                        </div>
                        <div class="btn-box">
                            <a href="#" class="btn btn-outline-success">Contact Us</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        
                        <figure  class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img
                                    title="" height="400px" src="https://i.ibb.co/QP6Nmpf/image-1-about.jpg"
                                    alt=""></a></figure>

                    </div>
                </div>

            </div>
            <div class="sec-title" style="margin-top: 60px">
                <span class="title text-success h5" style="">Our Future Goal</span>
            </div>
            <div class="text">
                Bookshare makes reading easier. People with dyslexia, blindness, cerebral palsy, and other reading barriers can customize their experience to suit their learning style and find virtually any book they need for school, work, or the joy of reading.
            </div>
         
        </div>
    </section>
    {{-- about us end here --}}

    <style>
        .zoom {
            transition: transform .2s;
            /* Animation */
        }

        .zoom:hover {
            transform: scale(0.9);
            /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
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
                    <div class="mb-2 text-muted"><a style="text-decoration: none" href="{{ url('category', $cat->id) }}">{{ $cat->name }}</a></div>
                </div>
            @endforeach
        </section>
    </section>

    <section class="  my-5 container">
        <div class="row">
            @foreach ($homeCategories as $item)
                <div class=" rounded col-sm-12 col-md-4 col-lg-4 border border-1" style="">

                    <div class="row">
                        <h2 class="rounded text-center text-white py-3 " style="background-color: #85929E">
                            {{ $item->name }}</h2>
                        @foreach (App\Models\Category::categoryBook($item->id) as $book)
                            {{-- book show start here --}}
                            <div class="col-md-2 col-lg-2 ">
                                <img class="mx-auto" height="64px" width="48px" src="{{ asset($book->image) }}"
                                    alt="">
                            </div>
                            <div class="col-md-10 col-lg-10">
                                <span> <a href="{{ url('book/detail', $book->id) }}" style="text-decoration: none">{{ $book->title }}</a> </span><br>
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
                            <img height="250px" width="100%" src="{{ asset($book->image) }}" class="card-img-top p-2"
                                alt="...">
                        </a>
                        <div class="card-body d-flex justify-content-between pt-2">
                            <p class="card-text text-capitalize h6"><a href="{{ url('book/detail', $book->id) }}"
                                    style="text-decoration: none">{{ $book->title }}</a> </p>
                            <span>{{ $book->price }}Tk</span>
                        </div>
                        <div class="text-center">
                            <span class="">{{ $book->author }}</span><br>
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


    <div class="container my-5 zoom p-5 " style="background-color: #EBEDEF" id="contact">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">Contact Us</h1>
                <form action="{{ url('message') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="your-name" class="form-label">Your Name</label>
                            <input name="name" type="text" class="form-control" id="your-name" name="your-name"
                                required>
                        </div>
                        <div class="col-md-6">
                            <label for="your-email" class="form-label">Your Email</label>
                            <input name="email" type="email" class="form-control" id="your-email" name="your-email"
                                required>
                        </div>
                        <div class="col-md-12">
                            <label for="your-subject" class="form-label">Your Subject</label>
                            <input name="subject" type="text" class="form-control" id="your-subject"
                                name="your-subject">
                        </div>
                        <div class="col-12">
                            <label for="your-message" class="form-label">Your Message</label>
                            <textarea name="message" class="form-control" id="your-message" name="your-message" rows="5" required></textarea>
                        </div>
                        <div class="col-12 text-center">

                            <button type="submit" class="btn btn-dark  fw-bold">Send</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
