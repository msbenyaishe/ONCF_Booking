<?php

namespace App\Http\Controllers;

use App\Models\Voyage;
use Illuminate\Http\Request;

class VoyageController extends Controller
{
    /**
     * Show search form
     */
    public function formRecherche()
    {
        $villesDepart  = Voyage::distinct()->pluck('villeDepart');
        $villesArrivee = Voyage::distinct()->pluck('villeDarrivee');

        return view('voyages.rechercher', compact('villesDepart', 'villesArrivee'));
    }

    /**
     * Show search results
     */
    public function resultatRecherche(Request $request)
    {
        $request->validate([
            'ville_depart'  => 'required',
            'ville_arrivee' => 'required',
        ]);

        $vd = $request->ville_depart;
        $va = $request->ville_arrivee;

        $voyages = Voyage::where('villeDepart', $vd)
                         ->where('villeDarrivee', $va)
                         ->get();

        $villesDepart  = Voyage::distinct()->pluck('villeDepart');
        $villesArrivee = Voyage::distinct()->pluck('villeDarrivee');

        return view('voyages.rechercher', compact(
            'voyages',
            'villesDepart',
            'villesArrivee',
            'vd',
            'va'
        ));
    }
}