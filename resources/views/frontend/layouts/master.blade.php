<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Header -->
        @include('frontend.layouts.header')

        @yield('content')

    <!-- Contact Section -->
<section class="bg-light py-5">
    <div class="container text-center">
        <h2>Get in Touch</h2>
        <p>Need help? Contact us for more information.</p>
        <a href="contact.html" class="btn btn-dark">Contact Us</a>
    </div>
</section>
    <!-- Footer -->
        @include('frontend.layouts.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>



