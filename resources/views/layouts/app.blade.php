<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 64 64'><rect width='64' height='64' rx='14' fill='%230e2744'/><g stroke='%23f5b942' stroke-width='3.5' stroke-linecap='round'><line x1='32' y1='10' x2='32' y2='17'/><line x1='14' y1='19' x2='19' y2='24'/><line x1='50' y1='19' x2='45' y2='24'/><line x1='8' y1='34' x2='15' y2='34'/><line x1='56' y1='34' x2='49' y2='34'/></g><path d='M19 42a13 13 0 0 1 26 0z' fill='%23f5b942'/><g stroke='%23f5b942' stroke-width='3.5' stroke-linecap='round' fill='none'><line x1='12' y1='47' x2='52' y2='47'/><path d='M18 54q4-4 8 0t8 0t8 0t4 0'/></g></svg>">
    <title>@yield('title', 'Home') | Sunrise Hotel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/hotel.css') }}" rel="stylesheet">
    @stack('styles')
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
