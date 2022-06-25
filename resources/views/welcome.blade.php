@extends('layouts.homeLayout')

@section('content')
      
      <section >
         <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1>Welcome to <strong class="color">Gamers Shop</strong></h1>
                              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
                              <a class="btn btn-lg btn-primary" href="{{route('about')}}" role="button">About </a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="{{ asset('images/boksing-gloves.png') }}" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @foreach($offers as $offer)
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-caption ">
                              <h1><strong class="color">{{$offer->title}}</strong></h1>
                              <p>{{$offer->description}}</p>
                              <a class="btn btn-lg btn-primary" href="product/{{$offer->product_id}}" role="button">See More</a>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="{{ asset('upload/offer/' . $offer->image) }}" alt="img"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
         </div>
      </section>
      <!-- plant -->
      <div id="plant" class="section  product">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="titlepage">
                     <h2><strong class="black"> Our</strong>  Products</h2>
                     <span>There are many games that you can recharge cards, gift cards and bill payments.</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
         <div class="clothes_main section ">
          <div class="container">
            <div class="row">
                @foreach($categories as $category)
               <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                  <div class="sport_product">
                     <figure><img src="{{ asset('upload/categories/' . $category->image) }}" alt="category-img"></figure>
                     <h3 class="card-title mt-2">{{$category->name}}</h3>
                     <a href="{{ route('category' , $category->id) }}" class="btn btn-info">View this</a>
                  </div>
               </div>
               @endforeach
            </div>
            <div class="row d-flex justify-content-center">
               <div class="col-auto">
                    <a href="{{ route('shop') }}" class="btn btn-info"> See More </a>
               </div>
            </div>
            </div>
           </div>
      </div>
      <!-- end plant -->
      <!--about -->
      <div class="section about ">
         <div class="container">
             <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                     <h2><strong class="black"> About</strong>  Us</h2>
                     <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                  </div>
                </div>
             </div>
         </div>
      </div>



      <section >
         <div id="main_slider" class="section carousel slide about-slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#main_slider" data-slide-to="0" class="active"></li>
               <li data-target="#main_slider" data-slide-to="1"></li>
               <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="{{ asset('images/card.png') }}" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box ">
                              <figure><img src="{{ asset('images/card.png') }}" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               {{-- <div class="carousel-item">
                  <div class="container">
                     <div class="row marginii">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="carousel-sporrt_text ">
                              <h1 class="sporrt_text">Best sports item shop our</h1>
                              <p  class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believableThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</p>
                              <div class="btn_main">
                                 <a class="btn btn-lg btn-primary" href="#" role="button">Read More</a>
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="img-box">
                              <figure><img src="{{ asset('images/child-image.png') }}" style="max-width: 100%; border: 15px solid #fff;"/></figure>
                           </div>
                        </div>
                     </div>
                  </div>
               </div> --}}
            </div>
         </div>
      </section>
      </div>
      <!-- end about -->

      @include('layouts.contact')

      
      @endsection