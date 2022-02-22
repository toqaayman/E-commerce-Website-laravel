@extends('layouts.app')

@section('title')
    Home
    <x-slot name="js">
        <script src="{{ asset('js/checkout.js') }}" ></script>
    </x-slot>
@endsection

@section('content')
    @include('layouts.navbar')
        <style>
            main{
                font-family: 'Roboto', sans-serif;
                display: grid;
                place-items: center;
                padding: 2rem 0;
            }
            main a{
                color: var(--site_col_1);
                text-decoration: underline
            }
        </style>
        <section>
            <main class="_container">
                <span style="font-size: 10rem" class="material-icons">done</span>
                <h1>Thank You</h1>
                <p>You have successfully placed your order. <a href="{{ route('user.orders.index')}}">View Order Detail</a></p>
            </main>
        </section>
    @include('layouts.footer')
@endsection
