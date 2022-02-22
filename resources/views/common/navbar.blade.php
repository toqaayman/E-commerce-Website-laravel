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
                <form>
                    <select class="input-select">
                        <option value="0">All Categories</option>
                        <option value="1">Computers</option>
                        <option value="1">Earbuds </option>
                    </select>
                    <input class="input" placeholder="Search here">
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
                                @if(\Illuminate\Support\Facades\Auth::check())
                                <span>{{\Illuminate\Support\Facades\Auth::user()->first_name}}</span>
                                <span>{{\Illuminate\Support\Facades\Auth::user()->last_name}}</span>
                                @endif
                            </a>

                            <div class="dropdown-menu dropdown-menu-right"
                                 aria-labelledby="navbarDropdown1">
                                <a class="dropdown-item" href="/profile">Profile</a>
                                <a class="dropdown-item" href="shopping-cart">My Cart</a>
                                <a class="dropdown-item" href="/admin/">Dashboard</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                    @else
                        <h4><a class="nav-link"  style="color: #FFFFFF" href="/login">Login</a></h4>
                    @endif
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

