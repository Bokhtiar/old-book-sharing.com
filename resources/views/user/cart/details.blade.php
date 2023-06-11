@extends('layouts.user.app')
@section('content')

<section class="container">
    <nav aria-label="breadcrumb" style="background-color: #F2F4F4">
        <ol class="breadcrumb py-3 px-3">
          <li class="breadcrumb-item"><a style="text-decoration: none"  href="{{url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Book</li>
        </ol>
      </nav>
</section>
 <section class="container my-5 card">

    <table class="table text-center">
        <thead>
          <tr>
            <th scope="col">Indexing</th>
            <th scope="col">Book Title</th>
            <th scope="col">Price</th>
            <th scope="col">Book Author</th>
            <th scope="col">Image</th>
            <th scope="col">Quantity</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @php
                $total = 0;
            @endphp
        @foreach ($carts as $cart)
        <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $cart->book->title }}</td>
            <td>{{ $cart->book->price * $cart->quantity }}</td>
            <td>{{ $cart->book->author }}</td>
            <?php
            $total +=$cart->book->price * $cart->quantity;
            ?>
            <td>
                <img src="{{ asset($cart->book->image)  }}" height="80px" width="80px" alt="">
            </td>
            <td>
                <form action="{{ url('user/cart/quantity-store',$cart->id) }}" method="POST" class="form-inline">
                    @csrf
                    <input class=" rounded border-none" style="width: 70px" type="number" class="" name="quantity" value="{{ $cart->quantity }}" id="">
                    <input style="background-color: #2ecc71 ;" class="btn  btn-sm text-light my-2" type="submit" name="" value="Submit" id="">
                </form>
            </td>
            <td>
                {{-- <a class="btn btn-info text-light btn-sm" href="{{ url('book/detail',$cart->book->id) }}">View</a> --}}
                <a style="background-color: #EA2027" class="btn text-light btn-sm" href="{{ url('user/cart/delete',$cart->id) }}">Delete</a>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>
      <div class="text-right py-2">
        <a style="background-color:#30336b" class="btn btn-sm text-light" href="{{ url('/') }}">Continue Shopping</a>
        <button style="background-color: #2ecc71"  class="btn btn-sm text-light"> Total : {{$total}} Tk </button>
        
      </div>
 </section>


 <section class="container card" >
        
            <div class="row justify-content-center desing">
                <div class="col-md-10 my-4">
                    <p style="color: #EA2027"class="h3 ">
                       [NB]: We Accept Cash-Out Only. This Number is Agent [Bkash, Rocket, Nogod] 01751109524 and Send Your Transaction Id.  
                    </p>
                    <h2 class="text-center">Checkout Form</h2>
                    <form class="form-group" action="{{ url('user/checkout/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label style="font-weight: bold" for="">Enter Your Name *</label>
                            <input type="text" placeholder="Enter Your Name" name="name" class="form-control my-2 " value="{{Auth::user()->name}}"  id="" required>
                        </div>
                        <div class="row form-gorup">
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label style="font-weight: bold"  for="">Enter Your Email *</label>
                                    <input type="email" name="email" class="form-control my-2" placeholder="Enter Your Email" value="{{Auth::user()->email}}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group ">
                                    <label style="font-weight: bold"  for="">Enter Your Phone *</label>
                                    <input type="number" name="phone" class="form-control my-2" placeholder="Enter Your Phone" value="{{ Auth::user()->phone }}" required>
                                </div>
                            </div>
                        </div>
                            
                        <div class="form-group">
                            <label style="font-weight: bold"  for="">Enter Your Location *</label>
                            <input type="text" placeholder="Enter Your Location" name="location" class="form-control my-2" value="" id="" required>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-weight: bold"  for="">Select Your Payment</label>
                                    <select class="form-control my-2" name="payment_name" id="">
                                        <option value="disable">Select Your Payment Method</option>
                                        <option value="bkash"> Bkash </option>
                                        <option value="rocket"> Rocket </option>
                                        <option value="nogod"> Nogod </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-weight: bold"  for="">Enter Your Payment Number *</label>
                                    <input type="number" placeholder="Enter Your Number" name="payment_number" class="form-control my-2" value="" id="" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label style="font-weight: bold"  for="">Enter Your Payment Transaction Id*</label>
                                    <input type="text" placeholder="Enter Your Transaction Id" name="payment_secret" class="form-control my-2" value="" id="" required>
                                </div>
                            </div>
                        </div>
                               
                           <div class="form-group">
                                <label style="font-weight: bold"  for="">Description *</label>
                                <textarea name="description" placeholder="Enter Your Description" class="form-control my-2" id="" cols="10" rows="5"></textarea>
                            </div>
                            <div class="text-center my-3">
                                <input style="background-color:#2e86de" type="submit" class="btn btn-lg text-light" name="btn" value="Continue to Checkout" id="">
                            </div>

                    </form>
                </div>
            </div>
        

    </section>

@endsection
