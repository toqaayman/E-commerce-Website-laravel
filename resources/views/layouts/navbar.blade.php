<header>
<div id="header">
    <div id="container">
        <div class="row">
            <!-- LOGO -->
            <div class="col-md-3">
                <div class="header-logo">
                    <a href="/" class="logo">
                        <img src="{{asset("assets/images/logo.png")}}" width='250' height='50' alt="" style="margin: 20px">
                    </a>
                </div>
            </div>
            <!-- /LOGO -->
        <!-- SEARCH BAR -->
        <div class="col-md-6">
            <div class="header-search">
                <form action="{{ route('shop') }}" method="GET">
                    <select class="input-select">
                        <option value="0">All Categories</option>
                        <option value="1">Computers</option>
                        <option value="1">Earbuds </option>
                    </select>
                    <input class="input" placeholder="Search here" value="{{ $search ?? '' }}">
                    <button class="search-btn">Search</button>
                </form>
            </div>
        </div>
        <!-- /SEARCH BAR -->
        <ul class="navbar-nav ml-auto">
            <div class="col-md-3 clearfix">
                <div class="header-ctn">
                    @if(\Illuminate\Support\Facades\Auth::check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                               data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" style="color: #FFFFFF">
                            @if (auth()->check())
                                    <span>{{\Illuminate\Support\Facades\Auth::user()->first_name}}</span>
                                    <span>{{\Illuminate\Support\Facades\Auth::user()->last_name}}</span>
                            @else
                                Login
                                @endif
                            </a>

                            <div class="dropdown-menu dropdown-menu-right"
                                 aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                                <a class="dropdown-item" href="{{ route('cart') }}">My Cart</a>
                                @if (auth()->user()->admin)
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a>
                                @else
                                    <a class="dropdown-item" href="">Edit Profile</a>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" method="post">Logout</a>
                            </div>
                            @else
                                <h4><a class="nav-link"  style="color: #FFFFFF" href="{{ route('login') }}">Login</a></h4>
                            @endif
                        </li>
                        <li class="space-lr">
                            <a class="notification-link" href="{{ route('cart') }}">
                                <span class="material-icons">shopping_cart</span>
                                @auth
                                    @if ($product_count = auth()->user()->carts()->firstOrCreate(['status' => 'N'])->products->sum('pivot.quantity'))
                                        <span class='badge'>{{ $product_count }}</span>
                                    @endif
                                @endauth
                                @guest
                                    {{-- if product is set and is not 0 --}}
                                    @if(request()->cookie('products') && $product_count = array_sum(json_decode(request()->cookie('products'), true)))
                                        <span class='badge'>{{ $product_count }}</span>
                                    @endif
                                @endguest

                            </a>
                        </li>
                </div>
                </div>
        </ul>
    </div>
    </div>
        </div>
    </div>
</div>
</header>
<!-- NAVIGATION -->

