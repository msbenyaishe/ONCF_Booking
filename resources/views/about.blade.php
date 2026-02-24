@extends('layouts.master')

@section('title', 'About')

@section('page_header')
    <div class="page-header">
        <div>
            <div class="page-title">About</div>
            <div class="page-subtitle">
                A ticket booking application inspired by modern travel platforms.
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="card">
    <div class="card-title">ONCF Booking – University project</div>
    <p class="card-muted">
        This Laravel application simulates a real-world train ticket booking flow: trip search,
        cart management, booking confirmation and an authenticated area for passengers.
    </p>
</div>
@endsection