<section class="page-banner">
    <div class="container text-center">
        <h1>{{ $heading }}</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $heading }}</li>
            </ol>
        </nav>
    </div>
</section>
