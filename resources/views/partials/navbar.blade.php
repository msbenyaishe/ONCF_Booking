<header class="site-header">
    <div class="nav-container">
        <a href="{{ route('voyage.form') }}" class="brand">
            <img src="{{ asset('images/train.png') }}" alt="ONCF Logo" class="brand-logo">
            <span>ONCF Booking</span>
        </a>
        
        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>

        <div class="nav-menu" id="navMenu">
            <nav class="nav-links">
                <a href="{{ route('voyage.form') }}" class="nav-link">Search Journeys</a>
                <a href="{{ route('about') }}" class="nav-link" style="display:none;">About</a>
                <a href="{{ route('contact') }}" class="nav-link" style="display:none;">Contact</a>
                <a href="{{ route('cart.show') }}" class="nav-link">Cart</a>
            </nav>

            <div class="nav-actions">
                @auth
                    <span class="nav-link badge-pill" style="display:inline-flex;">
                        {{ Auth::user()->prenom ?? Auth::user()->name }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}" style="margin: 0; width: 100%;">
                        @csrf
                        <button type="submit" class="btn btn-ghost logout-btn" style="padding: 0.5rem 1rem; border-radius: 999px;">
                            Sign out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Sign in</a>
                    <a href="{{ route('register') }}" class="btn btn-primary register-btn" style="padding: 0.5rem 1.25rem; font-size: 0.85rem;">Sign up</a>
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