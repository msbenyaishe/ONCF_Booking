<?php

namespace Database\Seeders;

use App\Models\Billet;
use App\Models\Commande;
use App\Models\Voyage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BilletSeeder extends Seeder
{
    public function run(): void
    {
        $commande = Commande::first();
        $voyage   = Voyage::first();

        // Safety check (avoid null errors)
        if (!$commande || !$voyage) {
            return;
        }

        Billet::updateOrCreate(
            [
                'id_commande' => $commande->id,
                'id_voyage'   => $voyage->id,
            ],
            [
                'qte' => DB::raw('qte + 1'),
            ]
        );
    }
}