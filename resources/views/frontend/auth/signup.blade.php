@extends('frontend.layouts.master')
@section('title','Car Rental - Login')

@section('content')
    <!-- Login Section -->
    {{-- <section class="container my-5">
        <h2 class="text-center">Login to Your Account</h2>
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
    </section> --}}
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('{{asset('website')}}/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sing Up<i class="ion-ios-arrow-forward"></i></span></p>
              <h1 class="mb-3 bread">Sing Up</h1>
            </div>
          </div>
        </div>
      </section>

    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h1>User Sing Up</h1>
                    <form action="{{route('account.progressRegister')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                            @error('name')
                                 <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                      
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                            @error('email')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                      
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                      
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
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
        </div>
      </section>
    @endsection
