<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 - Integrate Stripe Payment Gateway Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



    <link rel="shortcut icon" href="{{ asset('img/b.png') }}" />
    <title>Beyond | Science shop</title>

    <script src="{{ asset('js/utilities.js') }}" defer></script>
{{ $js ?? '' }}
<!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/slick.css")}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/slick-theme.css")}}"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/nouislider.min.css")}}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/style.css")}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css"><meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">



    <link rel="shortcut icon" href="{{ asset('img/b.png') }}" />
    <title>Beyond | Science shop</title>

    <script src="{{ asset('js/utilities.js') }}" defer></script>
{{ $js ?? '' }}
<!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/slick.css")}}"/>
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/slick-theme.css")}}"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/nouislider.min.css")}}"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset("assets/css/font-awesome.min.css")}}">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset("assets/css/style.css")}}"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <style type="text/css">
        .container {
            margin-top: 40px;
        }
        .panel-heading {
            display: inline;
            font-weight: bold;
        }
        .flex-table {
            display: table;
        }
        .display-tr {
            display: table-row;
        }
        .display-td {
            display: table-cell;
            vertical-align: middle;
            width: 55%;
        }
    </style>
</head>
<body>
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
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row text-center">
                        <h3 class="panel-heading">Payment Details</h3>
                    </div>
                </div>
                <div class="panel-body">

                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form role="form" action="{{ route('stripe.payment') }}" method="post" class="validation"
                          data-cc-on-file="false"
                          data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                          id="payment-form">
                        @csrf

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-num' size='20'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label>
                                <input autocomplete='off' class='form-control card-cvc' placeholder='e.g 415' size='4'
                                       type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-md-12 hide error form-group'>
                                <div class='alert-danger alert'>Fix the errors before you begin.</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-danger btn-lg btn-block" type="submit">Pay Now</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="newsletter" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <div class="newsletter">
                    <p>Sign Up for the <strong>NEWSLETTER</strong></p>
                    <form>
                        <input class="input" type="email" placeholder="Enter Your Email">
                        <button class="newsletter-btn" data-target='#myalert' data-toggle='modal'><i class="fa fa-envelope"></i> Subscribe</button>

                        <div class='modal' id='myalert'>
                            <div class='modal-dialog'>
                                <div class='alert alert-warning alert-dismissible ' role="alert" > Sent Successfully!
                                    <button class='close' data-dismiss='alert' aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="newsletter-follow">
                        <li>
                            <a href="https://www.facebook.com/NileUniversity/"><i class="fab fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/nileuniversitystudentunion/"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="https://nu.edu.eg/index.php"><i class="fab fa-twitter-square"></i></a>
                        </li>
                        <li>
                            <a href="https://nu.edu.eg/index.php"><i class="fab fa-pinterest-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /NEWSLETTER -->

<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>
                        <p>NUElectronics three principles, customer obsession rather than competitor focus, passion for invention and long-term thinking.</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>Juhayna Square - 6 October City</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>16453</a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i>admission@nu.edu.eg</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            <li><a href="#">Hot deals</a></li>
                            <li><a href="#">Laptops</a></li>
                            <li><a href="#">Smartphones</a></li>
                            <li><a href="#">Cameras</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">View Cart</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->

    <!-- bottom footer -->
    <div id="bottom-footer" class="section">
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="footer-payments">
                        <li><a href="#"><i class="fab fa-cc-visa"></i></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-paypal"></i></a></li>
                        <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

</body>

<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">
    $(function() {
        var $form         = $(".validation");
        $('form.validation').bind('submit', function(e) {
            var $form         = $(".validation"),
                inputVal = ['input[type=email]', 'input[type=password]',
                    'input[type=text]', 'input[type=file]',
                    'textarea'].join(', '),
                $inputs       = $form.find('.required').find(inputVal),
                $errorStatus = $form.find('div.error'),
                valid         = true;
            $errorStatus.addClass('hide');

            $('.has-error').removeClass('has-error');
            $inputs.each(function(i, el) {
                var $input = $(el);
                if ($input.val() === '') {
                    $input.parent().addClass('has-error');
                    $errorStatus.removeClass('hide');
                    e.preventDefault();
                }
            });

            if (!$form.data('cc-on-file')) {
                e.preventDefault();
                Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                Stripe.createToken({
                    number: $('.card-num').val(),
                    cvc: $('.card-cvc').val(),
                    exp_month: $('.card-expiry-month').val(),
                    exp_year: $('.card-expiry-year').val()
                }, stripeHandleResponse);
            }

        });

        function stripeHandleResponse(status, response) {
            if (response.error) {
                $('.error')
                    .removeClass('hide')
                    .find('.alert')
                    .text(response.error.message);
            } else {
                var token = response['id'];
                $form.find('input[type=text]').empty();
                $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                $form.get(0).submit();
            }
        }

    });
</script>
</html>
