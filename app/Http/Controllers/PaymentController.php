<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Billet;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class PaymentController extends Controller
{
    public function checkout($commande_id)
    {
        $commande = Commande::findOrFail($commande_id);
        $cart = session()->get('pending_commande_cart');

        if (!$cart) {
            return redirect()->route('cart.show');
        }

        Stripe::setApiKey(config('services.stripe.secret'));

        $lineItems = [];

        foreach ($cart as $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'mad',
                    'product_data' => [
                        'name' => 'Train Journey ' . $item['code_voyage'],
                    ],
                    'unit_amount' => $item['prix'] * 100,
                ],
                'quantity' => $item['qte'],
            ];
        }

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('payment.success', $commande->id),
            'cancel_url'  => route('payment.cancel', $commande->id),
        ]);

        return redirect($session->url);
    }

    public function success($commande_id)
    {
        $commande = Commande::findOrFail($commande_id);
        $cart = session()->get('pending_commande_cart');

        if (!$cart) {
            return redirect()->route('cart.show');
        }

        // Create billets ONLY after successful payment
        foreach ($cart as $voyageId => $item) {
            Billet::create([
                'id_commande' => $commande->id,
                'id_voyage'   => $voyageId,
                'qte'         => $item['qte'],
            ]);
        }

        $commande->update(['status' => 'paid']);

        session()->forget('cart');
        session()->forget('pending_commande_cart');

        return view('commande.billets', compact('commande'));
    }

    public function cancel($commande_id)
    {
        $commande = Commande::findOrFail($commande_id);
        $commande->update(['status' => 'cancelled']);

        session()->forget('pending_commande_cart');

        return view('payment.cancel');
    }
}