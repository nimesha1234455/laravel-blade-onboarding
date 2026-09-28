@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-lg-6">
                <p class="hero-kicker">Welcome to</p>
                <h1 class="hero-title">Sunrise Hotel</h1>
                <p class="hero-lead">Experience luxury, comfort and unforgettable moments at our beautiful hotel by the sea.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="{{ route('contact') }}" class="btn btn-book btn-lg">Book Your Stay</a>
                    <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">Our Story</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-photo">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=900&q=80" alt="Ocean-view room at Sunrise Hotel">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Our Special Offers</h2>
            <p class="section-sub">Enjoy the best experience with our exclusive packages.</p>
        </div>
        <div class="row g-4">
            @foreach ([
                ['img' => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?auto=format&fit=crop&w=600&q=80', 'title' => 'Luxury Rooms', 'text' => 'Well-furnished rooms with modern amenities for your comfort.'],
                ['img' => 'https://images.unsplash.com/photo-1414235077428-338989a2e8c0?auto=format&fit=crop&w=600&q=80', 'title' => 'Fine Dining', 'text' => 'Enjoy delicious dishes made with local, seasonal ingredients.'],
                ['img' => 'https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=600&q=80', 'title' => 'Relax & Rejuvenate', 'text' => 'Take a break and enjoy our premium spa and pool facilities.'],
            ] as $offer)
                <div class="col-md-4">
                    <div class="offer-card">
                        <div class="offer-photo">
                            <img src="{{ $offer['img'] }}" alt="{{ $offer['title'] }}">
                        </div>
                        <div class="offer-body">
                            <h3 class="offer-title">{{ $offer['title'] }}</h3>
                            <p class="mb-2">{{ $offer['text'] }}</p>
                            <a href="{{ route('about') }}" class="offer-link">Learn More &rarr;</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
