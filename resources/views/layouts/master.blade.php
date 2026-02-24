<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ONCF Booking - Premium Rail Travel')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?v={{ filemtime(public_path('css/style.css')) }}">
</head>
<body>

    <header class="site-header">
        <div class="nav-container">
            <a href="{{ route('voyage.form') }}" class="brand">
                <img src="{{ asset('images/train.png') }}" alt="ONCF Logo" class="brand-logo">
                <span>ONCF Booking</span>
            </a>
            <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

            <div class="nav-menu" id="navMenu">
                <nav class="nav-links">
                <a href="{{ route('voyage.form') }}" class="nav-link">Search Journeys</a>
                <a href="{{ route('about') }}" class="nav-link">About</a>
                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                <a href="{{ route('cart.show') }}" class="nav-link">Cart</a>
            </nav>

            <div class="nav-actions">
                @auth
                    <span class="nav-link badge-pill">
                        {{ Auth::user()->prenom ?? Auth::user()->name }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                        @csrf
                        <button type="submit" class="btn btn-ghost" style="padding: 0.5rem 1rem; border-radius: 999px;">
                            Sign out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Sign in</a>
                    <a href="{{ route('register') }}" class="btn btn-primary">Create account</a>
                @endauth
            </div>
            </div>
        </div>
    </header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const navMenu = document.getElementById('navMenu');
        
        if (mobileMenuBtn && navMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });
        }
    });
</script>

    <main class="main-content">
        @hasSection('page_header')
            @yield('page_header')
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                <span>✓</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                <span>✕</span>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="site-footer">
        <p>© {{ date('Y') }} ONCF. All rights reserved.</p>
    </footer>

</body>
</html>