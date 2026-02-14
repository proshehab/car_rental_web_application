@extends('frontend.layouts.master')
@section('title','Car Rental - About')
@section('content')

    <section class="ftco-section bg-light">
<div class="container">
<div class="row">

    {{-- Sidebar --}}
    <div class="col-md-3">
        <div class="card shadow-sm">
            <div class="card-body text-center">

                <img src="https://ui-avatars.com/api/?name={{auth()->user()->name}}"
                     class="rounded-circle mb-3" width="90">

                <h5>{{auth()->user()->name}}</h5>
                <p class="text-muted">{{auth()->user()->email}}</p>

            </div>

            <ul class="list-group list-group-flush dashboard-menu">
                <li class="list-group-item">
                    <a href="#">🏠 Dashboard</a>
                </li>

                <li class="list-group-item">
                    <a href="#">🚗 My Bookings</a>
                </li>

                <li class="list-group-item">
                    <a href="#">🛒 My Cart</a>
                </li>

                <li class="list-group-item">
                    <a href="#">👤 Profile</a>
                </li>

                <li class="list-group-item">
                    <a href="{{route('account.logout')}}">🚪 Logout</a>
                </li>
            </ul>
        </div>
    </div>


    {{-- Content --}}
    <div class="col-md-9">

        {{-- Welcome Card --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <h4>Welcome back, {{auth()->user()->name}} 👋</h4>
                <p class="mb-0">Here you can manage your bookings and rentals.</p>
            </div>
        </div>

        {{-- Stats --}}
        <div class="row text-center">

            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2></h2>
                        <p>Total Bookings</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2></h2>
                        <p>Active Rentals</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h2></h2>
                        <p>Completed</p>
                    </div>
                </div>
            </div>

        </div>

        {{-- Recent Bookings --}}
        <div class="card shadow-sm">
            <div class="card-header">
                <h5 class="mb-0">Recent Bookings</h5>
            </div>

            <div class="card-body p-0">
                <table class="table table-bordered mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Car</th>
                            <th>Pickup</th>
                            <th>Return</th>
                            <th>Total</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody>
                        
                    </tbody>

                </table>
            </div>
        </div>

    </div>

</div>
</div>
</section>
@endsection