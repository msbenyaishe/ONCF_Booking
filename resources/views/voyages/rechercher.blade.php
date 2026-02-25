@extends('layouts.master')

@section('title', 'Search Journeys')

@section('content')

<section class="booking-hero">
    <div style="text-align: center; margin-bottom: 3rem;">
        <h1 class="page-title">Plan your journey</h1>
        <p class="page-subtitle" style="margin-left: auto; margin-right: auto;">
            Select your departure and arrival stations to view available trains.
        </p>
    </div>

    <div class="card" style="max-width: 900px; margin: 0 auto 4rem;">
        <form method="GET" action="{{ route('voyage.search') }}" class="search-form">
            <div class="form-group" style="margin-bottom: 0;">
                <label for="ville_depart" class="form-label">From</label>
                <select id="ville_depart" name="ville_depart" class="form-control" required>
                    <option value="">Select departure</option>
                    @foreach($villesDepart as $v)
                        <option value="{{ $v }}" @if(isset($vd) && $vd == $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" style="margin-bottom: 0;">
                <label for="ville_arrivee" class="form-label">To</label>
                <select id="ville_arrivee" name="ville_arrivee" class="form-control" required>
                    <option value="">Select arrival</option>
                    @foreach($villesArrivee as $v)
                        <option value="{{ $v }}" @if(isset($va) && $va == $v) selected @endif>{{ $v }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group" style="margin-bottom: 0;">
                <label for="travel_date" class="form-label">Date</label>
                <input id="travel_date" class="form-control" type="date" name="travel_date" placeholder="dd/mm/yyyy">
            </div>

            <div class="form-group" style="margin-bottom: 0; align-self: flex-end;">
                <button class="btn btn-primary" type="submit" style="width: 100%;">
                    Find trains
                </button>
            </div>
        </form>
    </div>
</section>

@if(isset($voyages))
<section style="max-width: 900px; margin: 0 auto;">
    <h2 class="section-title">Available journeys</h2>
    <p class="section-subtitle">
        Review the options below and select the tickets you need.
    </p>

    <div class="trip-list">
        @forelse($voyages as $voyage)
            <article class="trip-card">
                <div class="trip-route">
                    <div class="trip-stations">
                        <span>{{ $voyage->villeDepart }}</span>
                        <span class="trip-stations-arrow">→</span>
                        <span>{{ $voyage->villeDarrivee }}</span>
                    </div>
                    <div class="trip-details">
                        Journey {{ $voyage->code_voyage }}
                    </div>
                </div>

                <div class="trip-action">
                    <div class="trip-price">
                        <span class="trip-price-amount">{{ $voyage->prixVoyage }} DH</span>
                        <span class="trip-price-label">Per passenger</span>
                    </div>

                    <form method="POST" action="{{ route('cart.add') }}" class="add-trip-form">
                        @csrf
                        <input type="hidden" name="voyage_id" value="{{ $voyage->id }}">
                        
                        <div style="display: flex; align-items: center; gap: 0.5rem;">
                            <span class="form-label" style="margin: 0;">Qty</span>
                            <input type="number" name="qte" value="1" min="1" class="form-control qty-input">
                        </div>

                        <button class="btn btn-secondary" type="submit">
                            Add to cart
                        </button>
                    </form>
                </div>
            </article>
        @empty
            <div class="card" style="text-align: center; padding: 3rem;">
                <h3 class="section-title" style="font-size: 1.25rem;">No journeys found</h3>
                <p class="section-subtitle" style="margin-bottom: 0;">Try adjusting your locations or choosing a different date.</p>
            </div>
        @endforelse
    </div>
</section>
@endif

@endsection