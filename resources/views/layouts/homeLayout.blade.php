<?php
    use App\Http\Controllers\ProductsController;
    $cart = 0 ;
    if(Auth::check()){
        $cart = ProductsController::cartItems();
        $user = 1;
    }
    else{
        $user=0;
    }
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Minics</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet"> <!-- range slider -->

  <!-- font awesome style -->
  <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/dark.css') }}" rel="stylesheet" />

  <!-- Custom styles for this template  public\css\style.scss-->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />   
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />

</head>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="header_top">
        <div class="container-fluid">
          <div class="top_nav_container">
            <div class="contact_nav">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call : +01 123455678990
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  Email : demo@gmail.com
                </span>
              </a>
            </div>
            <from class="search_form">
              <input type="text" class="form-control" placeholder="Search here...">
              <button class="" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </from>
            <div class="user_option_box">
              <!-- <a href="" class="account-link">
                <i class="fa fa-user" aria-hidden="true"></i>
                <span>
                  My Account
                </span>
                
              </a> -->
              <div class="dropdown">
                <button class="btn btn-secondary dropBtn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown">
                  <i class="fa fa-user" aria-hidden="true"></i>
                </button>
                <ul class="dropdown-menu dropMenu" id="personDrop" aria-labelledby="dropdownMenu2">
                  @Auth
                      <li>
                        <button class="dropdown-item" type="button">
                          <a href="{{ route('profile.edit') }}" class="dropLink">Profile</a>
                        </button>
                      </li>
                      <li>
                        <button class="dropdown-item" type="button">
                        @if(Auth::user()->role == 'admin')
                          <a href="{{ route('dashboard') }}" class="dropLink">Dashboard</a>
                        @else
                          <a href="{{ route('home') }}" class="dropLink">Home</a>
                        @endif
                      </button>
                    </li>
                    <li>
                      <button class="dropdown-item" type="button">
                        @if(Auth())
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                          </form>
                        <a href="{{ route('logout') }}" class="dropLink" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">{{ __('Log out') }}</a>
                        @endif
                      </button>
                    </li>
                  @endAuth 
                  @if($user != 1)
                  <li>
                      <button class="dropdown-item" type="button">
                          <a href="{{ route('login') }}" class="dropLink">Login</a>
                        </button>
                    </li>
                    <li>
                      <button class="dropdown-item" type="button">
                          <a href="{{ route('register') }}" class="dropLink">Signin</a>
                        </button>
                    </li>
                  @endif
                </ul>
              </div>
              <a href="{{ route('cartList') }}" class="cart-link">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                (<span class="cart-counter">{{$cart}}</span> )
              </a>
              

            </div>
          </div>

        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="index.html">
              <span>
                Minics
              </span>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('about')}}"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('shop')}}">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="why.html">Why Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="testimonial.html">Testimonial</a>
                </li>
                <li class="nav-item">
                  <div class="custom-control custom-switch mt-2 ">
                    <input type="checkbox" class="custom-control-input" id="darkSwitch">
                    <label class="custom-control-label" for="darkSwitch">Dark Mode</label>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->

    <div class="content">
        @yield('content')
    </div>
    <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              <a href="" class="navbar-brand">
                <span>
                  Minics
                </span>
              </a>
            </h5>
            <p>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              Address
            </p>
            <p>
              <i class="fa fa-phone" aria-hidden="true"></i>
              +01 1234567890
            </p>
            <p>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              demo@gmail.com
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Information
            </h5>
            <p>
              Eligendi sunt, provident, debitis nemo, facilis cupiditate velit libero dolorum aperiam enim nulla iste maxime corrupti ad illo libero minus.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_links">
            <h5>
              Useful Link
            </h5>
            <ul>
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="about.html">
                  About
                </a>
              </li>
              <li>
                <a href="product.html">
                  Products
                </a>
              </li>
              <li>
                <a href="why.html">
                  Why Us
                </a>
              </li>
              <li>
                <a href="testimonial.html">
                  Testimonial
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-youtube" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->
  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->
  <!-- jQery -->
  <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script>
  $(document).ready(function(){
  $('.dropBtn').on("click", function(){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
    // alert('ccc')
  });
});
</script>
  <!-- custom js -->
  <script src="{{asset('js/custom.js')}}"></script>
  <script src="{{asset('js/dark.js')}}"></script>
  <script src="{{asset('js/ion.rangeSlider.min.js')}}"></script>
    
  </body>
  </html>
  