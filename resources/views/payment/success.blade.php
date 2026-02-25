@extends('layouts.master')

@section('title', 'Payment Successful')

@section('content')
<div style="max-width: 600px; margin: 4rem auto;">
    <div class="card" style="text-align: center; padding: 4rem 2rem;">
        <div style="font-size: 3rem; margin-bottom: 1.5rem;">✓</div>
        <h2 class="section-title">Payment Successful</h2>
        <p class="section-subtitle" style="margin-left: auto; margin-right: auto;">
            Thank you for choosing ONCF Premium. Your booking has been confirmed, and your journey details are now secured.
        </p>
        <div style="display: flex; flex-direction: column; gap: 1rem; margin-top: 2rem;">
            @if(isset($commande))
                <a href="{{ route('payment.success', $commande->id) }}" class="btn btn-primary" style="padding: 1rem 2rem;">
                    Back to Ticket View
                </a>
            @endif
            <a href="{{ route('voyage.form') }}" class="btn btn-ghost">
                Book another trip
            </a>
        </div>
    </div>
</div>
@endsection