@extends('layouts.app')

@section('title')
    Login
@endsection


@section('content')
    @include('layouts.navbar')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p style="color:red">{{ $error }}</p>
        @endforeach
    @endif
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto mt-5">
                <div class="card shadow">
                    <div class="card-body">
        <form action="{{ route('register') }}" method="POST" autocomplete="off">
            @csrf
            <label for="first_name">First Name</label><br>
            <input class="form-control" type="text" name="first_name" id="first_name" required><br><br>

            <label for="last_name">Last Name</label><br>
            <input class="form-control" type="text" name="last_name" id="last_name" required><br><br>

            <label for="email">Email</label><br>
            <input class="form-control" type="email" name="email" id="email" required><br><br>

            <label for="password">Password</label><br>
            <input class="form-control" type="password" name="password" id="password" required><br><br>

            <label for="password_confirmation">Confirm Password</label><br>
            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" required><br><br>

            <div>
                <div class="submit">
                    <a href="{{ route('login') }}">Already registered?</a>
                    <button class="btn btn-danger" type="submit">
                        Register
                    </button>
                </div>
            </div>
        </form>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')
@endsection
