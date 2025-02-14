
@extends('frontend.layouts.master')
@section('title','Car Rental - About')

@section('content')
    <!-- About Section -->
    <section class="container my-5">
        <h2 class="text-center">About Us</h2>
        <p class="text-center">We are a leading car rental service providing quality vehicles for all your travel needs.
        </p>
        <div class="row">
            <div class="col-md-6">
                <img src="assets/images/about.jpg" class="img-fluid rounded" alt="About Us">
            </div>
            <div class="col-md-6">
                <h3>Our Mission</h3>
                <p>To provide affordable and reliable car rental services with top-notch customer satisfaction.</p>
                <h3>Why Choose Us?</h3>
                <ul>
                    <li>Wide range of vehicles</li>
                    <li>Affordable rates</li>
                    <li>24/7 customer support</li>
                    <li>Easy online booking</li>
                </ul>
            </div>
        </div>
    </section>


    @endsection

