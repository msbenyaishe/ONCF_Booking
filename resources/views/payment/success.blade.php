@extends('layouts.master')

@section('content')
<div class="text-center mt-5">
    <h2 class="text-success">Payment successful ✅</h2>
    <p>Your booking has been confirmed.</p>
    <a href="{{ route('voyage.form') }}" class="btn btn-primary mt-3">
        Book another trip
    </a>
</div>
@endsection