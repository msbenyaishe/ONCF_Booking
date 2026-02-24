@extends('layouts.master')

@section('title', 'Create Account')

@section('content')
<div class="auth-container" style="margin: 0 auto;">
    <div class="auth-header">
        <h1 class="page-title" style="font-size: 2rem;">Create an account</h1>
        <p class="section-subtitle">Join us to seamlessly book and manage your rail travels.</p>
    </div>

    <div class="card">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="grid-2" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                <div class="form-group">
                    <label class="form-label">First Name</label>
                    <input type="text" name="prenom" class="form-control" placeholder="John" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Last Name</label>
                    <input type="text" name="nom" class="form-control" placeholder="Doe" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Email Address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            </div>

            <div class="form-group">
                <label class="form-label">Phone Number</label>
                <input type="tel" name="tel" class="form-control" placeholder="+212 600 000000" required>
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <div class="form-group">
                <label class="form-label">Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••" required>
            </div>

            <button class="btn btn-primary" style="width: 100%; margin-top: 1rem;">
                Create Account
            </button>
        </form>

        <div style="text-align: center; margin-top: 2rem; font-size: 0.9rem;">
            <span style="color: var(--text-muted);">Already have an account?</span>
            <a href="{{ route('login') }}" style="color: var(--accent); font-weight: 500; margin-left: 0.5rem;">Sign In</a>
        </div>
    </div>
</div>
@endsection