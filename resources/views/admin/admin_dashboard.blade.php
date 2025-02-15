
@extends('admin.layouts.master')
@section('title','Car Rental - Home')

@section('content')

  <!-- Main Content -->
  <div class="container-fluid">
  

    <!-- Dashboard Overview Section -->
    <section class="container my-5">
        <h2 class="text-center">Admin Dashboard Overview</h2>
        <div class="row">
            <!-- Total Cars -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Cars</h5>
                        <p class="card-text">10 Cars Available</p>
                        <a href="car_management.html" class="btn btn-primary">Manage Cars</a>
                    </div>
                </div>
            </div>
            <!-- Total Bookings -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Bookings</h5>
                        <p class="card-text">25 Bookings Made</p>
                        <a href="booking_management.html" class="btn btn-primary">Manage Bookings</a>
                    </div>
                </div>
            </div>
            <!-- Total Users -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Users</h5>
                        <p class="card-text">150 Registered Users</p>
                        <a href="user_management.html" class="btn btn-primary">Manage Users</a>
                    </div>
                </div>
            </div>
            <!-- Settings -->
            <div class="col-md-3 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Settings</h5>
                        <p class="card-text">Manage system settings</p>
                        <a href="settings.html" class="btn btn-primary">Settings</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest Activity Section -->
        <div class="row">
            <div class="col-md-12">
                <h3>Latest Activities</h3>
                <div class="card">
                    <div class="card-body">
                        <ul>
                            <li>User John Doe made a booking for SUV (ID: 1024).</li>
                            <li>User Jane Smith updated their profile details.</li>
                            <li>New car 'Luxury Sedan' added to the fleet.</li>
                            <li>User Michael Johnson canceled their booking.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection