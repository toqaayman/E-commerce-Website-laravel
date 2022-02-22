<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}"/>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome Icon -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="{{ asset('css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('css/user/utilities.css') }}">
    {{ $style ?? '' }}

    <link rel="shortcut icon" href="{{ asset('img/b.png') }}" />
    <title>Beyond | Profile</title>

    <script src="{{ asset('js/user/utilities.js') }}" defer></script>


    <style>
        a[href = "{{ url()->current() }}"]{
            border-bottom: 3px solid var(--site_col_1);
        }
    </style>
</head>
<body class="m-0">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@extends('layouts.app')
@include('layouts.navbar')
    <hr>
<hr>

<hr>

<hr>

<hr>

    <section style="margin-top: 1.5rem;" class="container">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto mt-5">
                <div class="card shadow">
                    <div class="card-body">
                        <img class="x-x" src="{{ asset('storage/avatar/img.png') }}" width="200px" alt="user">
                        <div class="cloak">
                            <h2 class="m-0">{{ auth()->user()->full_name }}</h2>
                            <p class="m-0">{{ auth()->user()->email }}</p>
                            <br>
                            @if (auth()->user()->admin)
                                <a class="btn btn-danger" href="{{ route('admin.dashboard') }}">Dashboard</a>
                            @else
                                <button onclick="toggleForm()" class="cloak">Edit profile</button>
                            @endif
                        </div>
                        <br>
                        <form class="cloak hide" action="{{ route('user.profile') }}" method="post">
                            @csrf
                            Name <br>
                            <input class="input_text" type="text" name="" id=""><br>
                            Intro <br>
                            <textarea class="input_text"></textarea>

                            <input type="submit" value="Save">
                            <input onclick="toggleForm()" type="button" value="Cancel">
                        </form>
                        <!-- form --> <main>
                            <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <a class="nav-link  m-0" href="{{ route('user.profile') }}"><span class="material-icons">person</span> Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.orders.index') }}"><span class="material-icons">shopping_cart</span> Orders</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.ship_info') }}"><span class="material-icons">credit_card</span> Address/Payments</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('user.setting') }}"><span class="material-icons">settings</span> Setting</a>
                                </li>
                            </ul>
                                <!-- main content -->
                                <div style="margin-bottom: 1rem">

                                    {{ $slot }}

                                </div>
                        </main>
                    </div>

                    </div>
                </div>
            </div>



            <!-- form -->

    </section>
</body>
</html>
