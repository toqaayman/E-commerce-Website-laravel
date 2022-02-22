<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

</head>

<body>
@yield('content')
<script src="{{asset('assets/js/jquery-3.4.1.js')}}"></script>
<script src="{{asset('assets/js/checkout.js')}}"></script>
<script src="{{asset('assets/js/cart.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.min.js")}}"></script>
<script src="{{asset("assets/js/slick.min.js")}}"></script>
<script src="{{asset("assets/js/nouislider.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.zoom.min.js")}}"></script>
<script src="{{asset("assets/js/main.js")}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{ asset('js/shop.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
    $(function () {

        $(".rateYo").rateYo({
            starWidth:"40px"
        });

    });
</script>
</body>
</html>
