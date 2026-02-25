@extends('layouts.master')

@section('title', 'My Cart')

@section('page_header')
    <div style="text-align: center; margin-bottom: 3rem;">
        <h1 class="page-title">Cart</h1>
        <p class="page-subtitle" style="margin-left: auto; margin-right: auto;">
            Review your selected journeys, adjust quantities, and securely confirm your booking.
        </p>
    </div>
@endsection

@section('content')

@if(empty($cart))
    <div class="card" style="text-align: center; padding: 4rem 2rem; max-width: 600px; margin: 0 auto;">
        <h2 class="section-title">Your cart is empty</h2>
        <p class="section-subtitle">
            You do not have any journeys in your cart yet. Discover your next destination.
        </p>

        <a href="{{ route('voyage.form') }}" class="btn btn-primary">
            Search journeys
        </a>
    </div>
@else

<div class="card" style="padding: 2rem;">
    <h2 class="section-title" style="margin-bottom: 1.5rem; font-size: 1.25rem;">Journey Summary</h2>

    <div class="table-responsive">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Journey</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @php $total = 0; @endphp

                @foreach($cart as $id => $item)
                    @php $lineTotal = $item['prix'] * $item['qte']; @endphp
                    @php $total += $lineTotal; @endphp

                    <tr>
                        <td data-label="Journey" style="font-weight: 500;">{{ $item['code_voyage'] }}</td>
                        <td data-label="Price">{{ $item['prix'] }} DH</td>

                        <td data-label="Quantity">
                            <form method="POST" action="{{ route('cart.update') }}" style="display: flex; gap: 0.5rem;">
                                @csrf
                                @method('PATCH')

                                <input type="hidden" name="voyage_id" value="{{ $id }}">
                                <input type="number" name="qte" value="{{ $item['qte'] }}" min="1" class="form-control qty-input" style="width: 70px; padding: 0.5rem;">

                                <button class="btn btn-secondary" style="padding: 0.5rem 1rem;">
                                    Update
                                </button>
                            </form>
                        </td>

                        <td data-label="Total" style="font-weight: 600; color: var(--accent);">{{ $lineTotal }} DH</td>

                        <td data-label="Actions" style="text-align: right;">
                            <form method="POST" action="{{ route('cart.remove') }}">
                                @csrf
                                @method('DELETE')

                                <input type="hidden" name="voyage_id" value="{{ $id }}">

                                <button class="btn btn-ghost" style="color: var(--danger);">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="cart-summary">
        <div style="width: 100%; max-width: 400px;">
            <div style="display: flex; justify-content: space-between; margin-bottom: 1.5rem;">
                <span style="font-size: 1.1rem; color: var(--text-muted);">Total</span>
                <span class="cart-total">{{ $total }} DH</span>
            </div>

            <form method="POST" action="{{ route('commande.store') }}">
                @csrf
                <button class="btn btn-primary" style="width: 100%; font-size: 1.1rem; padding: 1rem;">
                    Confirm & Pay
                </button>
            </form>
        </div>
    </div>
</div>

@endif

@endsection