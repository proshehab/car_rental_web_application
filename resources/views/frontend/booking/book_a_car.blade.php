@extends('frontend.layouts.master')
@section('title','Car Rental - Boook A Car')

@section('content')



    <!-- Car Booking Section -->
    <section class="container my-5">
        <h2 class="text-center">Book Your Car</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="submit_booking.php" method="POST">
                    <!-- Car Details -->
                    <div class="mb-3">
                        <label for="carModel" class="form-label">Car Model</label>
                        <input type="text" class="form-control" id="carModel" name="carModel" value="Luxury Sedan"
                            readonly>
                    </div>

                    <div class="mb-3">
                        <label for="pickupDate" class="form-label">Pick-up Date</label>
                        <input type="date" class="form-control" id="pickupDate" name="pickupDate" required>
                    </div>

                    <div class="mb-3">
                        <label for="returnDate" class="form-label">Return Date</label>
                        <input type="date" class="form-control" id="returnDate" name="returnDate" required>
                    </div>

                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Additional Requests</label>
                        <textarea class="form-control" id="message" name="message" rows="4"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Confirm Booking</button>
                </form>
            </div>
        </div>
    </section>


    @endsection
