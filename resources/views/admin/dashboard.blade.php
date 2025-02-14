<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Car Rental</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Sidebar and Navbar -->
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white" style="width: 250px; height: 100vh;">
            <div class="container-fluid">
                <h3 class="text-center py-4">Admin Panel</h3>
                <ul class="nav flex-column px-2">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="admin_dashboard.html">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="manage_cars.html">
                            Manage Cars
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="booking_management.html">
                            Manage Bookings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="user_management.html">
                            Manage Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="settings.html">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('account.logout')}}">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="admin_dashboard.html">Admin Dashboard</a>
                </div>
            </nav>

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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
