@extends('layouts.app')

@section('title', 'Home | Serenity Grand Hotel')

@section('content')

<section class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-75">
            <div class="col-lg-7">
                <p class="hero-subtitle">WELCOME TO SERENITY GRAND</p>

                <h1 class="hero-title">
                    Experience Luxury.<br>
                    <span>Stay in Serenity.</span>
                </h1>

                <p class="hero-text">
                    Discover exceptional comfort, elegant rooms and
                    unforgettable hospitality at Serenity Grand Hotel.
                </p>

                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="btn hotel-btn me-2">
                        Book Your Stay
                    </a>

                    <a href="{{ route('about') }}" class="btn btn-outline-light">
                        Explore Hotel
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="welcome-section py-5">
    <div class="container py-5">
        <div class="text-center mx-auto" style="max-width: 800px;">

            <p class="section-label">A PLACE TO RELAX</p>

            <h2 class="section-title">
                Welcome to Serenity Grand
            </h2>

            <p class="text-muted mt-3">
                A refined hotel experience where modern elegance,
                warm hospitality and peaceful surroundings come together.
                Whether you are travelling for business or leisure,
                we are here to make your stay memorable.
            </p>

        </div>
    </div>
</section>

<section class="features-section py-5">
    <div class="container py-4">

        <div class="row g-4">

            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="bi bi-building"></i>
                    <h4>Elegant Rooms</h4>
                    <p>
                        Beautifully designed rooms with modern comfort
                        and everything you need for a relaxing stay.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="bi bi-cup-hot"></i>
                    <h4>Fine Dining</h4>
                    <p>
                        Enjoy delicious meals prepared with quality
                        ingredients and exceptional service.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="feature-card text-center">
                    <i class="bi bi-stars"></i>
                    <h4>Premium Service</h4>
                    <p>
                        Our dedicated team is committed to providing
                        a comfortable and memorable experience.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection