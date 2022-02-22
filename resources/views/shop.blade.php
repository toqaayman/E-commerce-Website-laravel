@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    @include('layouts.navbar')
    <script src="{{ asset('js/shop.js') }}" defer></script>

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

                                <div class="close-btn" onclick="t_aside()"></div>
                                <div class="filter">
                                    <div class="category">

                                        <ul>
                                            @foreach ($category as $item)
                                                <li style="color:{{$item->id == $cate ? '#3da8f3':''}}" onclick="updateQuery('category', {{$item->id}})">{{ ucfirst($item->title) }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <ul>
                                <div class="sort">
                                    <h3>Sort</h3>
                                    <ul>
                                        <li style="color:{{'ASC' == $sort ? '#3da8f3':''}}" onclick="updateQuery('sort', 'ASC')">Price: LOW to HIGH</li>
                                        <li style="color:{{'DESC' == $sort ? '#3da8f3':''}}" onclick="updateQuery('sort', 'DESC')">Price: HIGH to LOW</li>
                                    </ul>
                                </div>
                                <main class="_container">
                                    @if ($products->isNotEmpty())
                                        <div>
                                            <div class="filter-sort">
                                                <button class="btn btn-danger btn-sm btn-block">Filter</button>
                                                <button class="btn btn-danger btn-sm btn-block">Sort</button>
                                            </div>
                                        </div>
                                    @endif
                                    </ul>
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
                    @if ($products->isNotEmpty())
                        <div class="products-container products-grid">
                            @each('components.product', $products, 'product')
                        </div>
                    @else
                        <div style="display: grid;place-items:center">
                            <img style="max-width: 100%" src="{{ asset('img/no-product-found.png') }}" alt="">
                        </div>
                    @endif
                </div>


            </div>
        </div>
    </div>
    @include('layouts.footer')
@endsection
