<style>
    .footer{
  background: #152F4F;
  color:white;
  
  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }  
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  } 
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
}
</style>
<div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h2>Heading</h2>
          <p class="pr-5 text-white-50">Old book cannot be exchanged by calling us at hotline, if you want to enjoy our book exchange facility you have to order it from our website by logging in </p>
          
        </div>
        <div class="col-lg-3 col-xs-12 links">
          <h4 class="mt-lg-0 mt-sm-3">Links</h4>
            <ul class="m-0 p-0">
              <li>- <a class="text-white" href="{{url('/')}}">Home</a></li>
              <li>- <a class="text-white" href="{{ url('/') }}#about">About us</a></li>
              <li>- <a class="text-white" href="{{url('/')}}#contact">Contact us</a></li>
              <li>- <a class="text-white" href="{{url('book')}}">Books</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Location</h4>
          <p>Dottapara, ashulia, saver, Dahak</p>
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>+880 1627-226793</p>
          <p><i class="fa fa-envelope-o mr-3"></i>imam15-2639@diu.edu.bd</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col copyright">
          <p class=""><small class="text-white-50">©All Rights Old book Sharing.</small></p>
        </div>
      </div>
    </div>
    </div>