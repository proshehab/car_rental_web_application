
@extends('admin.layouts.master')
@section('title','Car Rental - Home')

@section('content')

  <!-- Main Content -->
  <div class="content">
  

    <section class="container my-5">
        <h2 class="text-center mb-4"><i class="fas fa-chart-bar text-primary"></i> Admin Dashboard Overview</h2>
        <div class="row">
            <!-- Total Cars -->
            <div class="col-md-3 mb-4">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-car"></i> Total Cars</h5>
                        <p class="card-text">10 Cars Available</p>
                        <a href="car_management.html" class="btn btn-light">Manage Cars</a>
                    </div>
                </div>
            </div>
            <!-- Available Cars -->
            <div class="col-md-3 mb-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-car-side"></i> Available Cars</h5>
                        <p class="card-text">7 Cars Available</p>
                        <a href="car_management.html" class="btn btn-light">Manage Cars</a>
                    </div>
                </div>
            </div>
            <!-- Total Rentals -->
            <div class="col-md-3 mb-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-file-contract"></i> Total Rentals</h5>
                        <p class="card-text">25 Rentals Made</p>
                        <a href="booking_management.html" class="btn btn-light">Manage Rentals</a>
                    </div>
                </div>
            </div>
            <!-- Total Earnings -->
            <div class="col-md-3 mb-4">
                <div class="card bg-warning text-dark">
                    <div class="card-body">
                        <h5 class="card-title"><i class="fas fa-dollar-sign"></i> Total Earnings</h5>
                        <p class="card-text">$15,000</p>
                        <a href="booking_management.html" class="btn btn-light">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</div>


@endsection