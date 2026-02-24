<x-app-layout>
    <x-slot name="header">
        <h2>
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div style="margin-top: 24px;">
        <div class="card">
            <div class="card-title">
                You are logged in
            </div>
            <p class="card-muted">
                You are successfully signed in. Use the menu above to search for trips,
                manage your cart and review your bookings.
            </p>
        </div>
    </div>
</x-app-layout>
