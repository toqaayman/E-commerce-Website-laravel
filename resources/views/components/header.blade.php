<header>
    <nav class="flex_align _container">
        <a class="logo-link d-b" href="{{ route('home') }}"><img class="d-b" src="{{ asset('img/logo.png') }}" width='600' alt="logo"></a>
        <form class="ml-auto form-inline" action="{{ route('shop') }}" method="GET">
            <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search for products..." value="{{ $search ?? '' }}">
                <button type="submit" class="btn btn-outline-danger my-2 my-sm-0">Search</button>
        </form>
        <ul class="flex_align ">
            <div class="col-md-3 ">
                <div class="header-ctn">
                    <li>
                        <a style="width: 2rem" class="logo-link d-b" href="{{ route('login') }}">
                            @if (auth()->check())
                                <span class="material-icons">perm_identity</span>
                            @else
                                Login
                            @endif
                        </a>
                    </li>

                </div>
            </div>
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
        </ul>
    </nav>
</header>
