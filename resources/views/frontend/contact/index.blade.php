@extends('frontend.layouts.master')
@section('title','Car Rental - Contact')

@section('content')

    <!-- Contact Section -->
    <section class="container my-5">
        <h2 class="text-center">Contact Us</h2>
        <p class="text-center">Have questions? Reach out to us!</p>
        <div class="row">
            <div class="col-md-6">
                <h4>Our Office</h4>
                <p>123 Car Rental Street, City, Country</p>
                <p>Email: support@carrental.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
            <div class="col-md-6">
                <h4>Send Us a Message</h4>
                <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </section>

@endsection
