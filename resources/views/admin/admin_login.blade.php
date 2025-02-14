@extends('frontend.layouts.master')
@section('title','Car Rental - Login')

@section('content')
    <!-- Login Section -->
    <section class="container my-5">
        <h2 class="text-center">Amin Login</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('account.authenicate')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="text" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                        @error('email')
                             <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('email') is-invalid @enderror" id="password" name="password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                   @enderror
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <p class="text-center mt-3">
                    Don't have an account? <a href="{{route('accoutnRegister')}}">Sign Up</a>
                </p>
                <p class="text-center">
                    <a href="forgot_password.html">Forgot Password?</a>
                </p>
            </div>
        </div>
    </section>
    @endsection
