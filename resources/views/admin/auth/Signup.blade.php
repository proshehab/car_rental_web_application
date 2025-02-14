@extends('frontend.layouts.master')
@section('title','Car Rental - Sigup')

@section('content')
    <!-- Login Section -->
    <section class="container my-5">
        <h2 class="text-center">Login to Your Account</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('account.progressRegister')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Nmae</label>
                        <input type="text" value="{{old('name')}}" class="form-control @error('naem') is-invalid @enderror" id="email" name="email">
                        @error('name')
                             <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
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
                    Don't have an account? <a href="{{route('account.login')}}">Sign Up</a>
                </p>
                <p class="text-center">
                    <a href="forgot_password.html">Forgot Password?</a>
                </p>
            </div>
        </div>
    </section>

    {{-- <!-- Contact Section -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>Need Help?</h2>
            <p>Contact us for more information or assistance with your booking.</p>
            <a href="contact.html" class="btn btn-dark">Contact Us</a>
        </div>
    </section> --}}

    @endsection
