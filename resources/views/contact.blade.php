@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
@include('partials.page-banner', ['heading' => 'Contact Us'])

<section class="section">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-5">
                <h2 class="section-title">Get in Touch</h2>
                <p>We'd love to hear from you. Feel free to contact us for any questions or reservations.</p>
                <ul class="contact-info list-unstyled">
                    <li><strong>Phone</strong><span>+94 77 123 4567</span></li>
                    <li><strong>Email</strong><span>info@sunrisehotel.lk</span></li>
                    <li><strong>Address</strong><span>12 Beach Road, Galle, Sri Lanka</span></li>
                </ul>
                <div class="contact-photo">
                    <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?auto=format&fit=crop&w=700&q=80" alt="Sunrise Hotel beachfront">
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-card">
                    <h2 class="section-title">Send Us a Message</h2>

                    @if (session('success'))
                        <div class="alert alert-success" role="status">{{ session('success') }}</div>
                    @endif

                    <form method="POST" action="{{ route('contact.send') }}" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                       class="form-control @error('name') is-invalid @enderror" placeholder="Enter your name" required>
                                @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                       class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email" required>
                                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Message</label>
                                <textarea id="message" name="message" rows="5"
                                          class="form-control @error('message') is-invalid @enderror" placeholder="Your message..." required>{{ old('message') }}</textarea>
                                @error('message') <div class="invalid-feedback">{{ $message }}</div> @enderror
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-book btn-lg">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
