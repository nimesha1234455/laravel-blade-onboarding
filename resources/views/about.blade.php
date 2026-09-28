@extends('layouts.app')

@section('title', 'About Us')

@section('content')
@include('partials.page-banner', ['heading' => 'About Us'])

<section class="section">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <div class="col-lg-6">
                <div class="about-photo">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80" alt="Sunrise Hotel pool and gardens">
                </div>
            </div>
            <div class="col-lg-6">
                <p class="eyebrow">Our Story</p>
                <h2 class="section-title">Welcome to Sunrise Hotel</h2>
                <p>Sunrise Hotel opened in 2009 with eight rooms and one big idea: guests should feel looked after, not processed. Today we are 32 rooms and a team of 60, and that idea has not changed.</p>
                <p class="mb-0">We hire from the neighbouring villages, buy from local suppliers and reinvest in the community that welcomes our guests.</p>
            </div>
        </div>

        <div class="row g-4 mt-5">
            @foreach ([
                ['title' => 'Our Mission', 'text' => 'To create unforgettable experiences for every guest.'],
                ['title' => 'Our Vision', 'text' => 'To be the most preferred hotel on the coast.'],
                ['title' => 'Our Values', 'text' => 'Quality, integrity, hospitality and care.'],
            ] as $item)
                <div class="col-md-4 text-center">
                    <div class="value-card">
                        <h3 class="value-title">{{ $item['title'] }}</h3>
                        <p class="mb-0">{{ $item['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
