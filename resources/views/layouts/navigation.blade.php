<nav x-data="{ open: false }" class="site-nav">
    <div class="site-nav-inner">
        <div class="site-nav-left">
            <a href="{{ route('voyage.form') }}" class="site-logo">
                <span class="site-logo-mark">ON</span>
                <span>ONCF Booking</span>
            </a>

            <div class="site-nav-links">
                <a href="{{ route('voyage.form') }}" class="site-nav-link">
                    Search
                </a>

                <a href="{{ route('cart.show') }}" class="site-nav-link">
                    Cart
                </a>
            </div>
        </div>

        <div class="site-nav-right">
            @auth
                <span class="site-nav-user">
                    {{ Auth::user()->name }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-secondary">
                        Sign out
                    </button>
                </form>
            @else
                <a href="{{ route('login') }}" class="site-nav-link">
                    Sign in
                </a>

                <a href="{{ route('register') }}" class="site-nav-link">
                    Sign up
                </a>
            @endauth

            <button type="button" @click="open = !open" class="btn btn-secondary">
                ☰
            </button>
        </div>
    </div>

    <div x-show="open">
        <div class="site-nav-inner" style="padding-top: 0.25rem; padding-bottom: 0.75rem;">
            <div class="site-nav-links">
                <a href="{{ route('voyage.form') }}" class="site-nav-link">
                    Search
                </a>
                <a href="{{ route('cart.show') }}" class="site-nav-link">
                    Cart
                </a>

                @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-secondary">
                            Sign out
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="site-nav-link">
                        Sign in
                    </a>
                    <a href="{{ route('register') }}" class="site-nav-link">
                        Sign up
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>