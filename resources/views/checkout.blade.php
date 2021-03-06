@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    @include('layouts.navbar')

            <main  class="container">
                <div class="row">
                    <div class="col-12 col-md-8 mx-auto mt-5">
                        <div class="card shadow">
                            <div class="card-body">
                                <h1>Checkout</h1>
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <p style="color: red">{{ $error }}</p>
                                    @endforeach
                                @else
                                    <strong style="cursor: pointer;" onclick="fillForm(this)">Fill My Details -></strong>
                                @endif
                                <form action="{{ route('checkout') }}" method="post">
                                    @csrf
                                    <h2>Billing Details</h2>
                                    <div class="form-group row">
                                        <label for="first_name" class="col-form-label col-12 col-md-3" for="first_name">First Name</label>
                                        <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-12 col-md-3" for="last_name">Last Name</label>
                                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-12 col-md-3" for="email">Email Address</label>
                                        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-12 col-md-3" for="address">Address Line</label>
                                        <input id="address" type="text" name="address_line" value="{{ old('address_line') }}" required>
                                    </div>
                                    <div class="two_form">
                                        <div class="form-group row">
                                            <label class="col-form-label col-12 col-md-3" for="city">City</label>
                                            <input id="city" type="text" name="city" value="{{ old('city') }}" required>
                                        </div>
                                        <div class="form-group row">
                                            <label for="postal_code" class="col-form-label col-12 col-md-3" for="postal_code">Postal Code</label>
                                            <input id="postal_code" type="text" name="postal_code" value="{{ old('postal_code') }}" required>
                                        </div>
                                    </div>
                                    <div class="two_form">
                                        <div class="form-group row">
                                            <label class="col-form-label col-12 col-md-3" for="country">Country</label>
                                            <input id="country" type="text" name="country" value="{{ old('country') }}" required>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-12 col-md-3" for="mobile">Mobile No.</label>
                                            <input id="mobile" type="text" name="mobile" value="{{ old('mobile') }}" required>
                                        </div>
                                    </div>
                                    <h2>Payment Details</h2>
                                    <input type="checkbox" name="cod" value="1" id="cod">
                                    <label class="col-form-label col-12 col-md-3" for="cod">Cash On Delivery</label>
                                        <br>
                                    <button class="btn btn-danger" type="submit">Order Now</button>
                                </form>
                                <br>
                                <div class="checkout">
                                    <a class="btn btn-success mr-2 ml-auto" href="{{ route('stripe.payment') }}">Pay with credit</a>
                                </div>
                                <br>

                                <br><br>
                                <div class="order">
                                    <div class="card">
                                        <h2>Your Order</h2>
                                        <div class="flex_align">
                                            <strong>Sub Total</strong>
                                            <span>{{ $subTotal }} EGP</span>
                                        </div>
                                        <div class="flex_align">
                                            <strong>Discount</strong>
                                            <span>0 EGP</span>
                                        </div>
                                        <div class="flex_align">
                                            <strong>Tax</strong>
                                            <span>20 EGP</span>
                                        </div>
                                        <div class="flex_align">
                                            <strong>Shipping Cost</strong>
                                            <span>50 EGP</span>
                                        </div>
                                        <div class="flex_align">
                                            <h3>Total Cost</h3>
                                            <h3>{{ $subTotal + 20 + 50 }} EGP</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@section('js/cart.js')
    <script src="assets/js/checkout.js"><script>
@stop
    @include('layouts.footer')
@endsection
