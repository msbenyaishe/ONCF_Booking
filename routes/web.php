<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\PaymentController;

/*
|--------------------------------------------------------------------------
| Public pages
|--------------------------------------------------------------------------
|
| These pages are accessible to everyone (before login):
| - Home / Search
| - About
| - Contact
| - Login & Register (see auth.php)
|
*/

Route::get('/', function () {
    return redirect()->route('voyage.form');
});

Route::get('/rechercher', [VoyageController::class, 'formRecherche'])
    ->name('voyage.form');

Route::get('/rechercher/resultats', [VoyageController::class, 'resultatRecherche'])
    ->name('voyage.search');

Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Authenticated user pages
|--------------------------------------------------------------------------
|
| These actions require a logged-in passenger:
| - Manage cart
| - Validate a booking (order)
|
*/

Route::middleware(['auth'])->group(function () {
    Route::post('/cart/add', [CartController::class, 'add'])
        ->name('cart.add');

    Route::get('/cart', [CartController::class, 'show'])
        ->name('cart.show');

    Route::patch('/cart/update', [CartController::class, 'update'])
        ->name('cart.update');

    Route::delete('/cart/remove', [CartController::class, 'remove'])
        ->name('cart.remove');

    Route::post('/commande/valider', [CommandeController::class, 'store'])
        ->name('commande.store');

    Route::get('/dashboard', function () {
        return redirect()->route('voyage.form');
    })->name('dashboard');

    Route::get('/checkout/{commande_id}', [PaymentController::class, 'checkout'])
    ->name('payment.checkout');

Route::get('/success/{commande_id}', [PaymentController::class, 'success'])
    ->name('payment.success');

Route::get('/cancel/{commande_id}', [PaymentController::class, 'cancel'])
    ->name('payment.cancel');
});

require __DIR__ . '/auth.php';