 @extends('frontend.layouts.master')
 @section('title','Car Rental - Home')

 @section('content')

 <!-- Hero Section -->
 <section class="hero bg-dark text-white text-center py-5">
    <div class="container">
        <h1>Rent a Car with Ease</h1>
        <p>Find the perfect car for your journey at the best prices.</p>
        <a href="rentals.html" class="btn btn-primary">Browse Cars</a>
    </div>
</section>

<!-- Featured Cars -->
<section class="container my-5">
    <h2 class="text-center">Featured Cars</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="assets/images/car1.jpg" class="card-img-top" alt="Car 1">
                <div class="card-body">
                    <h5 class="card-title">Luxury Sedan</h5>
                    <p class="card-text">Comfort and style for your journey.</p>
                    <a href="booking.html" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/images/car2.jpg" class="card-img-top" alt="Car 2">
                <div class="card-body">
                    <h5 class="card-title">SUV</h5>
                    <p class="card-text">Spacious and reliable for any trip.</p>
                    <a href="booking.html" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="assets/images/car3.jpg" class="card-img-top" alt="Car 3">
                <div class="card-body">
                    <h5 class="card-title">Convertible</h5>
                    <p class="card-text">Enjoy the breeze in a stylish ride.</p>
                    <a href="booking.html" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
