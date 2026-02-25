@extends('layouts.master')

@section('title', 'Sign In')

@section('content')
<div class="auth-container" style="margin: 0 auto;">
    <div class="auth-header">
        <h1 class="page-title" style="font-size: 2rem;">Welcome back</h1>
        <p class="section-subtitle">Sign in to manage your journeys and bookings.</p>
    </div>

    <div class="card">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            @if ($errors->any())
                <div style="margin-bottom: 2rem; font-weight:600; text-align:center;">
                    <ul style="margin: 0;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                Sign In
            </button>
        </form>

        <div style="text-align: center; margin-top: 2rem; font-size: 0.9rem;">
            <span style="color: var(--text-muted);">Don't have an account?</span>
            <a href="{{ route('register') }}" style="color: var(--accent); font-weight: 500; margin-left: 0.5rem;">Create an account</a>
        </div>
    </div>
</div>
@endsection