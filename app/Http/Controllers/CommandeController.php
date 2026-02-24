<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CommandeController extends Controller
{
    public function store(Request $request)
    {
        $cart = session()->get('cart');

        if (!$cart || count($cart) === 0) {
            return redirect()->route('cart.show')
                             ->with('error', 'Votre panier est vide');
        }

        // Create commande only (NO billets yet)
        $commande = Commande::create([
            'id_client' => Auth::id(),
            'date_comm' => Carbon::now(),
            'status'    => 'PENDING',
        ]);

        // Store cart temporarily for Stripe
        session()->put('pending_commande_cart', $cart);

        return redirect()->route('payment.checkout', $commande->id);
    }
}