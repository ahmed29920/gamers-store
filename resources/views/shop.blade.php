@extends('layouts.homeLayout')

@section('content')
  <!-- product section -->

  <section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Categories
        </h2>
      </div>
      <div class="row">
      @foreach($categories as $category)
        <div class="col-sm-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="{{ asset('upload/categories/' . $category->image) }}" alt="">
              <a href="{{ route('category' , $category->id) }}" class="add_cart_btn">
                <span>
                  View This 
                </span>
              </a>
            </div>
            <div class="detail-box">
              <h5>
              {{$category->name}}
              </h5>
              <div class="product_info">

              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
  </section>

  <!-- end product section -->


@endsection
