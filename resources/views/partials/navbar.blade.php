<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
                <svg width="36" height="30" viewBox="0 0 40 34" fill="none" stroke="#F6C15B" stroke-width="2" stroke-linejoin="round" aria-hidden="true">
                    <path d="M20 4c5 5 6 12 0 22-6-10-5-17 0-22z"/>
                    <path d="M14 10c-6 1-10 6-10 11 4 5 10 6 16 5M26 10c6 1 10 6 10 11-4 5-10 6-16 5"/>
                    <path d="M3 27c5 4 12 5 17 5s12-1 17-5" stroke-linecap="round"/>
                </svg>
                <span class="brand-text">
                    <span class="brand-name">Sunrise Hotel</span>
                    <span class="brand-tag">Stay &middot; Relax &middot; Enjoy</span>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Open menu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-4">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
                        <a class="btn btn-book" href="{{ route('contact') }}">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
