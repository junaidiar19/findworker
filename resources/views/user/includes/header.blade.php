<!-- ======= Header ======= -->
<nav class="navbar navbar-expand-lg navbar-light py-2 bg-white border-bottom">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('img/logo.png') }}" alt="" class="img-fluid h-40 me-2">
            <h5 class="my-auto text-dark">{{ env('APP_NAME') }}</h5>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="{{ route('user.hire') }}">Hire Worker</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold" href="{{ route('user.quick.team') }}">Quick Team</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark fw-semibold dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu border-0" aria-labelledby="navbarDropdown">
                        <li><a href="#">Web Developer</a></li>
                        <li><a href="#">UI/UX Designer</a></li>
                        <li><a href="#">Graphic Designer</a></li>
                        <li><a href="#">Videographer</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @if (auth()->check())
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link text-dark dropdown-toggle fw-semibold">
                        <div class="flex-shrink-0 me-2">
                            <img class="h-30 w-30 rounded-circle border" src="{{ auth()->user()->getAvatar }}">
                        </div>
                        {{-- {{ auth()->user()->name }} --}}
                    </a>
                    <ul class="dropdown-menu border-0">
                        <li><a href="{{ route('worker.dashboard') }}">Dashboard</a></li>
                        <li><a href="#" 
                            onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();"
                        >Logout</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                @else
                <li><a class="btn btn-orange" href="{{ route('login') }}">Login</a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<!-- End Header -->