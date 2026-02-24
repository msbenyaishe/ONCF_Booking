<?php

namespace Database\Seeders;

use App\Models\Billet;
use App\Models\Commande;
use App\Models\Voyage;
use Illuminate\Database\Seeder;

class BilletSeeder extends Seeder
{
    public function run(): void
    {
        $commande = Commande::first();
        $voyage   = Voyage::first();

        Billet::create([
            'id_commande' => $commande->id,
            'id_voyage'   => $voyage->id,
            'qte'         => 1,
        ]);
    }
}