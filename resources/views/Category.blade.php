@extends('layouts.homeLayout')

@section('content')
<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>
      <div class="row">
      @foreach($products as $product)
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('upload/products/' . $product->image) }}" alt="">
              <a data-productid="{{$product->id}}" class="add_cart_btn add">
                <span>
                  <!-- Add To Cart -->
                  <i class="fa fa-cart-plus"></i>
                </span>
              </a>
            </div>
            <div class="detail-box text-center">
              <h5>
              {{$product->name}}
              </h5>
              <p class="card-title">{{$product->description}}</p>
              <h5 class="card-title"> <del> {{$product->price}} </del></h5>
               <h5 class="card-title">{{$product->discount}}</h5>
              <div class="product_info">
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
</section>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        
        $('.add').on('click', function(event) {
            event.preventDefault()

            productId = event.target.parentNode.dataset['productid'];
            counter = $('.cart-counter').text();
            count = Number(counter);
            $('.cart-counter').text( count + 1  ); 
            $.ajax({
                method: 'GET',
                url:  '/add-to-cart/' + productId,
                cache: false,
                data: {product_id: productId},
                success: function() {
                    $('.cart-counter').text( count + 1  ); 
                },
            }) 
        });
    </script>

@endsection
