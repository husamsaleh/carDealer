@extends('frontend/layout.app')
@section('content')

    <!-- Hero Section -->
    <section class="hero vh-100" style="background-image: url('{{ asset('frontend/images/imgh.png') }}');">
        <div class="hero-content text-white text-center">
            <!-- Your hero content goes here -->
            <h1 class="text-white">Welcome to Our Website</h1>
            <p>Discover amazing things about us!</p>
            <!-- Add more hero content as needed -->
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <!-- Your About Us content goes here -->
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget fermentum turpis, a scelerisque elit.</p>
                    <!-- Add more About Us content as needed -->
                </div>
            </div>
        </div>
    </section>

@endsection
