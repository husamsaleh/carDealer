
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('addresses')}}">Address</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('frontend.tables.cars')}}">Cars</a>
                </li>


                @if (Route::has('login') && Auth::check())
                    <li class="nav-item"><a href="{{ route('logout') }}" class="nav-link">Logout</a></li>
                @elseif (Route::has('login') && !Auth::check())
                    <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"> <a href="{{ url('/register') }}" class="nav-link">Register</a></li>
                    @endif

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
