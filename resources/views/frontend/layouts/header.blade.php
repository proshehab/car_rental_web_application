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
                        <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('aboutPage')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('rentalsPage')}}">Rentals</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('contactPage')}}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('account.login')}}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('accoutnRegister')}}">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


</div>
