@extends('frontend.layouts.master')
@section('title','Car Rental - Rentals')

@section('content')


    <!-- Car Listings Section -->
    <section class="container my-5">
        <h2 class="text-center">Available Cars for Rent</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/car1.jpg" class="card-img-top" alt="Car 1">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Sedan</h5>
                        <p class="card-text">Comfortable and stylish for city rides.</p>
                        <a href="{{route('bookCarPage')}}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/car2.jpg" class="card-img-top" alt="Car 2">
                    <div class="card-body">
                        <h5 class="card-title">SUV</h5>
                        <p class="card-text">Spacious and reliable for long trips.</p>
                        <a href="{{route('bookCarPage')}}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="assets/images/car3.jpg" class="card-img-top" alt="Car 3">
                    <div class="card-body">
                        <h5 class="card-title">Convertible</h5>
                        <p class="card-text">Enjoy open-air driving in style.</p>
                        <a href="{{route('bookCarPage')}}" class="btn btn-primary">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
