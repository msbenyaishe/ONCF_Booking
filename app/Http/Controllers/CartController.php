<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Show cart
     */
    public function show()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    /**
     * Add voyage to cart
     */
    public function add(Request $request)
    {
        $request->validate([
            'voyage_id' => 'required|exists:voyages,id',
            'qte'       => 'required|integer|min:1',
        ]);

        $voyage = Voyage::findOrFail($request->voyage_id);
        $cart   = session()->get('cart', []);

        if (isset($cart[$voyage->id])) {
            $cart[$voyage->id]['qte'] += $request->qte;
        } else {
            $cart[$voyage->id] = [
                'code_voyage' => $voyage->code_voyage,
                'prix'        => $voyage->prixVoyage,
                'qte'         => $request->qte,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->route('cart.show')
                         ->with('success', 'Voyage ajouté au panier');
    }

    /**
     * Update quantity
     */
    public function update(Request $request)
    {
        $request->validate([
            'voyage_id' => 'required',
            'qte'       => 'required|integer|min:1',
        ]);

        $cart = session()->get('cart');

        if (isset($cart[$request->voyage_id])) {
            $cart[$request->voyage_id]['qte'] = $request->qte;
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show');
    }

    /**
     * Remove item from cart
     */
    public function remove(Request $request)
    {
        $cart = session()->get('cart');

        if (isset($cart[$request->voyage_id])) {
            unset($cart[$request->voyage_id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show');
    }
}