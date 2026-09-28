<section class="cta-banner">
    <div class="container text-center">
        <h2>Your Perfect Getaway Awaits</h2>
        <p>Make your stay memorable with us.</p>
        <a href="{{ route('contact') }}" class="btn btn-book btn-lg">Book Now</a>
    </div>
</section>

<footer class="site-footer">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-4">
                <a class="d-flex align-items-center gap-2 text-decoration-none mb-2" href="{{ route('home') }}">
                    <svg width="34" height="28" viewBox="0 0 40 34" fill="none" stroke="#F6C15B" stroke-width="2" stroke-linejoin="round" aria-hidden="true">
                        <path d="M20 4c5 5 6 12 0 22-6-10-5-17 0-22z"/>
                        <path d="M14 10c-6 1-10 6-10 11 4 5 10 6 16 5M26 10c6 1 10 6 10 11-4 5-10 6-16 5"/>
                        <path d="M3 27c5 4 12 5 17 5s12-1 17-5" stroke-linecap="round"/>
                    </svg>
                    <span class="footer-brand">Sunrise Hotel</span>
                </a>
                <p class="mb-0">A quiet seaside stay with warm hospitality, good food and sunsets worth waking up for.</p>
            </div>
            <div class="col-6 col-md-2">
                <p class="footer-head">Quick Links</p>
                <ul class="list-unstyled mb-0">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-3">
                <p class="footer-head">Contact Info</p>
                <ul class="list-unstyled mb-0 footer-contact">
                    <li>+94 77 123 4567</li>
                    <li>info@sunrisehotel.lk</li>
                    <li>Colombo, Sri Lanka</li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="footer-head">Follow Us</p>
                <div class="d-flex gap-2 social-row">
                    <a href="#" aria-label="Facebook">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M13 22v-8h2.7l.4-3.3H13V8.6c0-.9.3-1.6 1.7-1.6h1.6V4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.8H8v3.3h2.1V22h2.9z"/></svg>
                    </a>
                    <a href="#" aria-label="Instagram">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 8.6a3.4 3.4 0 1 0 0 6.8 3.4 3.4 0 0 0 0-6.8zm0 5.6a2.2 2.2 0 1 1 0-4.4 2.2 2.2 0 0 1 0 4.4zm4.9-5.8a.8.8 0 1 1-1.6 0 .8.8 0 0 1 1.6 0zM21 7.6c-.1-1-.3-1.7-.6-2.3a4.6 4.6 0 0 0-1.7-1.7c-.6-.3-1.3-.5-2.3-.6C15.3 3 15 3 12 3s-3.3 0-4.4.1c-1 .1-1.7.3-2.3.6a4.6 4.6 0 0 0-1.7 1.7c-.3.6-.5 1.3-.6 2.3C3 8.7 3 9 3 12s0 3.3.1 4.4c.1 1 .3 1.7.6 2.3.4.7 1 1.3 1.7 1.7.6.3 1.3.5 2.3.6C8.7 21 9 21 12 21s3.3 0 4.4-.1c1-.1 1.7-.3 2.3-.6a4.6 4.6 0 0 0 1.7-1.7c.3-.6.5-1.3.6-2.3.1-1.1.1-1.4.1-4.4s0-3.3-.1-4.4zM19.2 16c0 .9-.2 1.4-.4 1.7-.2.4-.4.7-.8 1-.3.3-.6.5-1 .7-.3.2-.8.4-1.7.4-1 .1-1.3.1-4 .1s-3-.1-4-.1c-.9 0-1.4-.2-1.7-.4-.4-.2-.7-.4-1-.7a3 3 0 0 1-.7-1c-.2-.3-.4-.8-.4-1.7-.1-1-.1-1.3-.1-4s0-3 .1-4c0-.9.2-1.4.4-1.7.2-.4.4-.7.7-1 .3-.3.6-.5 1-.7.3-.2.8-.4 1.7-.4 1-.1 1.3-.1 4-.1s3 0 4 .1c.9 0 1.4.2 1.7.4.4.2.7.4 1 .7.3.3.5.6.7 1 .2.3.4.8.4 1.7.1 1 .1 1.3.1 4s0 3-.1 4z"/></svg>
                    </a>
                    <a href="#" aria-label="YouTube">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M23 12s0-3.4-.4-5a3 3 0 0 0-2.1-2.1C18.9 4.5 12 4.5 12 4.5s-6.9 0-8.5.4A3 3 0 0 0 1.4 7C1 8.6 1 12 1 12s0 3.4.4 5a3 3 0 0 0 2.1 2.1c1.6.4 8.5.4 8.5.4s6.9 0 8.5-.4A3 3 0 0 0 22.6 17c.4-1.6.4-5 .4-5zM9.8 15.5v-7l6 3.5-6 3.5z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <p class="footer-copy mb-0">&copy; {{ date('Y') }} Sunrise Hotel. All rights reserved.</p>
    </div>
</footer>
