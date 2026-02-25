@extends('layouts.master')

@section('title', 'Your Ticket')

@section('page_header')
<div style="text-align: center; margin-bottom: 3rem;" class="no-print">
    <h2 class="page-title">Your Travel Document</h2>
    <p class="page-subtitle" style="margin-left: auto; margin-right: auto;">
        Please keep this boarding pass ready for inspection.
    </p>
</div>
@endsection

@section('content')

<style>
    @media print {
        @page {
            size: A4 portrait;
            margin: 0;
        }

        /* Reset HTML & Body entirely */
        html, body {
            width: 100% !important;
            height: auto !important;
            min-height: auto !important;
            margin: 0 !important;
            padding: 0 !important;
            background-color: #fff !important;
            -webkit-print-color-adjust: exact !important;
            print-color-adjust: exact !important;
        }

        /* Hide all layout noise and interactive elements */
        .site-header, .site-footer, button[onclick="window.print()"], .no-print {
            display: none !important;
        }

        /* Strip margins/paddings from main layout wrapper to avoid blank pages */
        .main-content {
            margin: 0 !important;
            padding: 0 !important;
            display: block !important;
        }

        /* Reset main container */
        div[style*="max-width: 800px"] {
            max-width: 100% !important;
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
            display: block !important;
        }

        /* Ensure the card spans appropriately and does not force a second page */
        .card {
            box-shadow: none !important;
            border: 2px solid #000 !important;
            width: 190mm !important;
            margin: 10mm auto !important; /* Reduced vertical margin to fit easily */
            page-break-inside: avoid;
            break-inside: avoid;
            border-radius: 0 !important;
        }

        /* Header of the ticket */
        .card > div:first-child {
            background-color: #000 !important;
            color: #fff !important;
        }

        /* Ensure text defaults to black */
        span, h3, h4, p {
            color: #000 !important;
        }

        /* Grays for muted text */
        span[style*="color: var(--text-muted)"], 
        h4[style*="color: var(--text-muted)"] {
            color: #555 !important;
        }

        /* Specific accents to black and bold */
        span[style*="color: var(--accent)"],
        span[style*="color: var(--text-main)"] {
            color: #000 !important;
            font-weight: 700 !important;
        }

        /* Borders */
        hr {
            border-top-color: #000 !important;
        }

        /* Gray out the background of the 'Passengers/Total Paid' row */
        div[style*="background: var(--bg-primary)"] {
             background-color: #f4f4f4 !important;
        }

        /* QR section */
        .card > div:last-child {
            background-color: #fff !important;
            border-top: 2px dashed #000 !important;
        }

        .badge-pill {
            background-color: transparent !important;
            border: 1px solid #fff !important;
            color: #fff !important;
        }
    }
</style>

<div style="max-width: 800px; margin: 0 auto; padding-bottom: 4rem;">

    <div class="card" style="padding: 0; overflow: hidden; position: relative;">
        {{-- Decorative Header Bar for the Ticket --}}
        <div style="background-color: var(--accent); color: var(--text-inverse); padding: 2rem; display: flex; justify-content: space-between; align-items: center;">
            <div>
                <span class="badge-pill" style="background: rgba(255,255,255,0.2); color: white; border: none; margin-bottom: 1rem;">Confirmed</span>
                <h3 style="color: white; margin: 0; font-size: 1.5rem;">ONCF Boarding Pass</h3>
            </div>
            <div class="ticket-logo">
                <img src="{{ asset('images/alboraq.png') }}" alt="Al Boraq Logo" style="height: 40px; filter: brightness(0) invert(1);">
            </div>
        </div>

        {{-- Ticket Body --}}
        <div style="padding: 3rem;">
            
            {{-- Passenger Info --}}
            <div style="margin-bottom: 3rem;">
                <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); margin-bottom: 1rem;">Passenger Details</h4>
                <div style="display: flex; gap: 4rem;">
                    <div>
                        <span style="display: block; font-size: 0.85rem; color: var(--text-muted);">Name</span>
                        <span style="font-size: 1.2rem; font-weight: 500; color: var(--text-main);">
                            {{ $commande->client->prenom ?? Auth::user()->prenom ?? Auth::user()->name ?? 'Passenger' }} {{ $commande->client->nom ?? Auth::user()->nom ?? '' }}
                        </span>
                    </div>
                    <div>
                        <span style="display: block; font-size: 0.85rem; color: var(--text-muted);">Contact</span>
                        <span style="font-size: 1.2rem; font-weight: 500; color: var(--text-main);">
                            {{ $commande->client->tel ?? Auth::user()->tel ?? Auth::user()->email ?? 'N/A' }}
                        </span>
                    </div>
                </div>
            </div>

            <hr style="border: none; border-top: 1px dashed var(--border); margin: 3rem 0;">

            {{-- Journey Info --}}
            <h4 style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em; color: var(--text-muted); margin-bottom: 1.5rem;">Journey Details</h4>

            @if($commande->voyages && $commande->voyages->count())
                @foreach($commande->voyages as $voyage)
                    @php
                        $qty = $voyage->pivot->qte ?? 1;
                        $totalVoyagePrice = $voyage->prixVoyage * $qty;
                    @endphp
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                        <div style="flex: 1;">
                            <span style="display: block; font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.25rem;">Departure</span>
                            <span style="display: block; font-size: 1.5rem; font-weight: 600; color: var(--text-main);">{{ $voyage->villeDepart }}</span>
                            <span style="display: block; font-size: 1rem; color: var(--accent);">{{ $voyage->heureDepart }}</span>
                        </div>
                        
                        <div style="flex: 1; text-align: center; color: var(--text-muted);">
                            <span style="display: block; font-size: 0.85rem; margin-bottom: 0.25rem;">
                                {{ \Carbon\Carbon::parse($voyage->date_voyage ?? $commande->date_comm)->format('d M Y') }}
                            </span>
                            <div style="height: 1px; background: var(--border); position: relative; width: 60%; margin: 1.25rem auto;">
                                <span style="position: absolute; top: -10px; left: 50%; transform: translateX(-50%); background: var(--bg-surface); padding: 0 10px;">➔</span>
                            </div>
                            <span style="display: block; font-size: 0.85rem; margin-top: 0.25rem;">Train {{ $voyage->code_voyage }}</span>
                        </div>

                        <div style="flex: 1; text-align: right;">
                            <span style="display: block; font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.25rem;">Arrival</span>
                            <span style="display: block; font-size: 1.5rem; font-weight: 600; color: var(--text-main);">{{ $voyage->villeDarrivee }}</span>
                            <span style="display: block; font-size: 1rem; color: var(--accent);">{{ $voyage->heureDarrivee }}</span>
                        </div>
                    </div>

                    <div style="display: flex; justify-content: space-between; align-items: center; background: var(--bg-primary); padding: 1.5rem; border-radius: var(--radius-sm);">
                        <div>
                            <span style="display: block; font-size: 0.85rem; color: var(--text-muted);">Passengers</span>
                            <span style="font-size: 1.1rem; font-weight: 500;">{{ $qty }}</span>
                        </div>
                        <div style="text-align: right;">
                            <span style="display: block; font-size: 0.85rem; color: var(--text-muted);">Total Paid</span>
                            <span style="font-size: 1.25rem; font-weight: 600; color: var(--accent);">{{ number_format($totalVoyagePrice, 2) }} DH</span>
                        </div>
                    </div>

                    @if(!$loop->last)
                        <hr style="border: none; border-top: 1px dashed var(--border); margin: 3rem 0;">
                    @endif
                @endforeach
            @else
                <p style="text-align: center; color: var(--text-muted); padding: 2rem 0;">No journey is associated with this booking.</p>
            @endif

        </div>

        {{-- Footer QR Code --}}
        <div style="background-color: var(--bg-primary); padding: 2rem; border-top: 1px dashed var(--border); text-align: center;">
            <img src="{{ asset('images/qr.png') }}" alt="QR Code" style="width: 120px; margin: 0 auto; mix-blend-mode: multiply;">
            <p style="font-size: 0.85rem; color: var(--text-muted); margin-top: 1rem;">Scan this code at the electronic gates</p>
        </div>

    </div>

    {{-- Actions --}}
    <div style="text-align: center; margin-top: 3rem;">
        <button onclick="window.print()" class="btn btn-primary" style="padding: 1rem 3rem;">
            Print Ticket
        </button>
    </div>

</div>

@endsection