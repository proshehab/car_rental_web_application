<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Car Rental</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Header -->
    <div id="header">
        <!-- header.html -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="index.html">Car Rental</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="rentals.html">Rentals</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <!-- Login Section -->
    <section class="container my-5">
        <h2 class="text-center">Login to Your Account</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>

                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
                <p class="text-center mt-3">
                    Don't have an account? <a href="signup.html">Sign Up</a>
                </p>
                <p class="text-center">
                    <a href="forgot_password.html">Forgot Password?</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="bg-light py-5">
        <div class="container text-center">
            <h2>Need Help?</h2>
            <p>Contact us for more information or assistance with your booking.</p>
            <a href="contact.html" class="btn btn-dark">Contact Us</a>
        </div>
    </section>

    <!-- Footer -->
    <div id="footer">
        <!-- footer.html -->
        <footer class="bg-dark text-white text-center py-3">
            <div class="container">
                <p>&copy; 2025 Car Rental. All Rights Reserved.</p>
                <p><a href="contact.html" class="text-white">Contact Us</a></p>
            </div>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
