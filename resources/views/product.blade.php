@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    @include('layouts.navbar')
        <section>
            <br>
            <main class="container">
                <div class="card text-center">
                    <div class="card-header">
                        <img style="max-height: 350px; object-fit:cover; width: 250px" src="{{ asset('storage/'.$product->image) }}"" alt="{{$product->title}}">

                    </div>
                    <div class="card-body">
                        <h1>{{ucfirst($product->title)}}</h1>
                        <h2>{{$product->price."EGP"}}</h2>
                        <p>Category: {{$product->category->title}}</p>
                        <p>{{ $product->stock_quantity > 0 ? "In Stock" : "Out of Stock" }}</p>
                        <p>{{ucfirst($product->about)}}</p>
                        @if ($isAdded)
                            <button class="btn btn-danger btn-lg btn-block" onclick="window.location = '{{ route('cart') }}'">Go to Cart</button>
                        @else
                            @auth
                                <form action="{{ route('atc', ['product'=>$product->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Add to Cart</button>
                                </form>
                            @endauth
                            @guest
                                <button class="btn btn-danger btn-lg btn-block" onclick="addToCart({{$product->id}})" data-product="{{ $product->id }}">Add to Cart</button>
                            @endguest
                        @endif
                    </div>
                    <div class="card-footer text-muted">
                        2 days ago
                    </div>
                </div>
            </main>
        </section>
    @include('layouts.footer')
@endsection
