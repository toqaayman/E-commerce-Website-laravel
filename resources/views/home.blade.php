@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    @include('layouts.navbar')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/images/15.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/images/16.jpg')}}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('assets/images/18.png')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-center">
                                    Categories
                                </h5>
                                <hr>
                                <span class="badge badge-primary badge-pill">computers</span>
                                <span class="badge badge-primary badge-pill">laptops</span>
                                <span class="badge badge-primary badge-pill">TV</span>
                                <span class="badge badge-primary badge-pill">Earbuds</span>
                                <span class="badge badge-primary badge-primary">Mobiles</span>
                                <span class="badge badge-primary badge-pill">Vision</span>
                                <br>

                                <span class="badge badge-primary badge-pill">eBook</span>
                                <span class="badge badge-primary badge-pill">Batteries</span>
                                <span class="badge badge-primary badge-pill">Theater</span>

                                <br>
                                <span class="badge badge-primary badge-pill">Audio</span>
                                <span class="badge badge-primary badge-pill">Cameras</span>
                                <span class="badge badge-primary badge-pill">wearable</span>
                                <span class="badge badge-primary badge-pill">Tablets</span>
                                <span class="badge badge-primary badge-pill">VoIP</span>
                                <span class="badge badge-primary badge-pill">Electrical power</span>
                                <span class="badge badge-primary badge-pill">GPS</span>
                                <span class="badge badge-primary badge-pill">Cars</span>
                                <span class="badge badge-primary badge-pill">Chargers</span>
                                <span class="badge badge-primary badge-pill">Headphones</span>


                                <hr>
                                <h5 class="card-title text-center font-weight-bold">Popular Tags</h5>
                                <hr>
                                <span class="badge badge-primary badge-pill">computers</span>
                                <span class="badge badge-primary badge-pill">laptops</span>
                                <span class="badge badge-primary badge-pill">TV</span>
                                <span class="badge badge-primary badge-pill">Earbuds</span>
                                <span class="badge badge-primary badge-primary">Mobiles</span>
                                <span class="badge badge-primary badge-pill">Vision</span>
                                <br>

                                <span class="badge badge-primary badge-pill">eBook</span>
                                <span class="badge badge-primary badge-pill">Batteries</span>
                                <span class="badge badge-primary badge-pill">Theater</span>

                                <br>
                                <span class="badge badge-primary badge-pill">Audio</span>
                                <span class="badge badge-primary badge-pill">Cameras</span>
                                <span class="badge badge-primary badge-pill">wearable</span>
                                <span class="badge badge-primary badge-pill">Tablets</span>
                                <span class="badge badge-primary badge-pill">VoIP</span>
                                <span class="badge badge-primary badge-pill">Electrical power</span>
                                <span class="badge badge-primary badge-pill">GPS</span>
                                <span class="badge badge-primary badge-pill">Cars</span>
                                <span class="badge badge-primary badge-pill">Chargers</span>
                                <span class="badge badge-primary badge-pill">Headphones</span>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                {{--<div class="row">--}}
                {{--<div class="col-12">--}}
                {{--<div class=" mb-4 bg-light">--}}
                {{--<div class="">--}}
                {{--<input type="search" class="text-center form-control" placeholder="Search"--}}
                {{--style="width: 100%; margin: 0; padding: 0">--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}

                <div class="row mb-4">
                    <div class="col-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <p class="m-0 text-center font-weight-bold h5">
                                    New Arrivals
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @each('components.product', $products, 'product')
                </div>

                <div class="row mt-2">
                    <div class="col-12">
                        <div class="text-center mb-4">
                            <a href="{{ route('shop') }}" class="text-muted"
                               style="outline: none; text-decoration: none;">
                                See More New Arraivals
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection

