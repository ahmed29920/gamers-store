<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('home') }}" class="simple-text logo-mini">{{ __('GS') }}</a>
            <a href="{{ route('home') }}" class="simple-text logo-normal">{{ __('Gamers Shop') }}</a>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{ route('home') }}">
                    <i class="tim-icons icon-bank"></i>
                    <p>{{ __('Home') }}</p>
                </a>
            </li>
        @if(Auth::user()->role == 'admin')
            <li class="active">
                <a href="{{ route('dashboard') }}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
        @endif
            <li>
                <a href="{{ route('profile.edit')  }}">
                    <i class="tim-icons icon-single-02"></i>
                    <p>{{ __('User Profile') }}</p>
                </a>
            </li>
            @if(Auth::user()->role == 'user')
                <li>
                    <a href="{{ route('cartList') }}">
                        <i class="tim-icons icon-cart"></i>
                        <p>{{ __('My Cart') }}</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="tim-icons icon-paper"></i>
                        <p>{{ __('My Orders') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}"  onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                        <i class="tim-icons icon-double-left"></i>
                        <p>{{ __('logout') }}</p>
                    </a>
                </li>
            @endif
            @if(Auth::user()->role == 'admin')
                <li>
                    <a data-toggle="collapse" href="#laravel-examples" aria-expanded="false">
                        <i class="tim-icons icon-single-copy-04" ></i>
                        <span class="nav-link-text" >{{ __('Categorires') }}</span>
                        <b class="caret mt-1"></b>
                    </a>

                    <div class="collapse" id="laravel-examples">
                        <ul class="nav pl-4">
                            <li>
                                <a href="{{ route('categories.index') }}">
                                    <i class="tim-icons icon-bullet-list-67"></i>
                                    <p>{{ __('Show Categories') }}</p>
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('categories.create') }}">
                                    <i class="tim-icons icon-simple-add"></i>
                                    <p>{{ __('Create Category') }}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#laravel1-examples" aria-expanded="false">
                        <i class="tim-icons icon-components" ></i>
                        <span class="nav-link-text" >{{ __('Products') }}</span>
                        <b class="caret mt-1"></b>
                    </a>

                    <div class="collapse " id="laravel1-examples">
                        <ul class="nav pl-4">
                            <li>
                                <a href="{{ route('products.index') }}">
                                    <i class="tim-icons icon-bullet-list-67"></i>
                                    <p>{{ __('Show Products') }}</p>
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('products.create') }}">
                                    <i class="tim-icons icon-simple-add"></i>
                                    <p>{{ __('Create Products') }}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a data-toggle="collapse" href="#laravel2-examples" aria-expanded="false">
                        <i class="tim-icons icon-money-coins" ></i>
                        <span class="nav-link-text" >{{ __('Offers') }}</span>
                        <b class="caret mt-1"></b>
                    </a>

                    <div class="collapse " id="laravel2-examples">
                        <ul class="nav pl-4">
                            <li>
                                <a href="{{ route('offer.index') }}">
                                    <i class="tim-icons icon-bullet-list-67"></i>
                                    <p>{{ __('Show Offers') }}</p>
                                </a>
                            </li>
                            <li>
                            <a href="{{ route('offer.create') }}">
                                    <i class="tim-icons icon-simple-add"></i>
                                    <p>{{ __('Create Offers') }}</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="{{ route('contact.show') }}">
                        <i class="tim-icons icon-chat-33"></i>
                        <p>Messages</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.icons') }}">
                        <i class="tim-icons icon-atom"></i>
                        <p>{{ __('Icons') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.maps') }}">
                        <i class="tim-icons icon-pin"></i>
                        <p>{{ __('Maps') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.notifications') }}">
                        <i class="tim-icons icon-bell-55"></i>
                        <p>{{ __('Notifications') }}</p>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pages.tables') }}">
                        <i class="tim-icons icon-puzzle-10"></i>
                        <p>{{ __('Table List') }}</p>
                    </a>
                </li>
                <li >
                    <a href="{{ route('pages.rtl') }}">
                        <i class="tim-icons icon-world"></i>
                        <p>{{ __('RTL Support') }}</p>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</div>
