<style>
    .hide {
        display: none;
    }

    .myDIV:hover+.hide {
        display: block;
    }

    .myDIV:hover {
        background: #F2F4F4;
    }
</style>

<div class="col-sm-6 col-6 col-md-3 col-lg-3     my-4 rounded-lg zoom">
    <div class=" myDIV shadow p-3" style="width: 100%; margin-left:0px; ">
        <a href="{{ url('book/detail', $id) }}">
            <img class="" height="250px" width="100%" src="{{ asset($image) }}" class="p-2"
                alt="...">
        </a>
        <div class="card-body d-flex justify-content-between pt-2">
            <p class="card-text text-capitalize h6"><a href="{{ url('book/detail', $id) }}"
                    style="text-decoration: none">{{ $title }}</a> </p>
            <span>{{ $price }}Tk</span>
        </div>
        <div class="text-center">
            <span class="">{{ $author }}</span><br>
            <span><span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                <span class="fa fa-star" style="color: yellow; font-size:10px"></span>
                <span class="fa fa-star" style=" font-size:10px"></span></span>
        </div>
    </div>
    <div class=" text-center hide mx-auto px-4 pt-2"
        style=" 
       
        height:40px;
        width:150px;
        position: relative;
        top: -50%;
        
        left: 1px;
        color:white;
        text-decoration: none;
        border-radius: 5px;">

        <a class="text-white p-1 pt-3 px-2 rounded" href="{{ url('book/detail', $id) }}" style=" background:#FA8072"><span class="material-symbols-outlined">
            visibility
        </span></a>

        <a class="text-white p-1 pt-3 px-2 rounded" href="{{ url('user/cart',$id) }}" style=" background:#FA8072">
            <span class="material-symbols-outlined">
                shopping_cart
                </span>
        </a>
        
        
    </div>
</div>