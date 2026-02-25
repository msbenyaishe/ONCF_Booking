@extends('layouts.master')

@section('title', 'Payment Cancelled')

@section('content')
<div style="max-width: 600px; margin: 4rem auto;">
    <div class="card" style="text-align: center; padding: 4rem 2rem;">
        <div style="font-size: 3rem; margin-bottom: 1.5rem;">✕</div>
        <h2 class="section-title">Payment Cancelled</h2>
        <p class="section-subtitle" style="margin-left: auto; margin-right: auto;">
            Your booking process was interrupted. No charges were made, and you can try again whenever you're ready.
        </p>
        <div style="margin-top: 2rem;">
            <a href="{{ route('cart.show') }}" class="btn btn-secondary">
                Return to Cart
            </a>
        </div>
    </div>
</div>
@endsection