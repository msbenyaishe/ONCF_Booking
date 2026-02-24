@extends('layouts.master')

@section('title', 'Welcome to ONCF Booking')

@section('page_header')
    <div style="text-align: center; margin-top: 4rem; margin-bottom: 5rem;">
        <h1 class="page-title">Experience seamless rail travel.</h1>
        <p class="page-subtitle" style="margin: 0 auto;">
            Book your journeys across Morocco in a calm, focused interface designed entirely around you.
        </p>
    </div>
@endsection

@section('content')
<div class="auth-container" style="max-width: 800px; margin: 0 auto;">
    <section class="card" style="text-align: center; padding: 4rem;">
        <h2 class="section-title">Ready to depart?</h2>
        <p class="section-subtitle">
            Find the perfect journey, review options quietly, and secure your tickets in moments.
        </p>

        <div style="display:flex; justify-content:center; gap:1.5rem; flex-wrap:wrap;">
            <a href="{{ route('voyage.form') }}" class="btn btn-primary" style="padding: 1rem 2rem; font-size: 1.1rem;">
                Search journeys
            </a>

            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-secondary" style="padding: 1rem 2rem; font-size: 1.1rem;">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-secondary" style="padding: 1rem 2rem; font-size: 1.1rem;">
                    Sign in to account
                </a>
            @endauth
        </div>
    </section>
</div>
@endsection
