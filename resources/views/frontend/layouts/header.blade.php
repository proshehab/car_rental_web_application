<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">Car<span>Book</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="{{route('aboutPage')}}" class="nav-link">About</a></li>
        <li class="nav-item"><a href="{{route('carPage')}}" class="nav-link">Cars</a></li>
        <li class="nav-item"><a href="{{route('contactPage')}}" class="nav-link">Contact</a></li>
        {{-- <li class="nav-item">
          <a href="#" class="nav-link">
            Cart
            <span class="badge badge-light">
              {{ session()->has('cart') ? count(session('cart')) : 0 }}
            </span>
          </a>
        </li> --}}

      </ul>
      <a href="{{route('account.login')}}" class="btn btn-primary py-2 mr-1">Login</a> <a
        href="{{route('accoutnRegister')}}" class="btn btn-secondary py-2 ml-1">Sing Up</a></p>
    </div>
  </div>
</nav>
<!-- END nav -->