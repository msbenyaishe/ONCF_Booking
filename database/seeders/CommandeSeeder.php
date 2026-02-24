<?php

namespace Database\Seeders;

use App\Models\Commande;
use App\Models\User;
use App\Models\Voyage;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommandeSeeder extends Seeder
{
    public function run(): void
    {
        $client = User::first();

        if (!$client) {
            $this->command->warn('No users found. Run UserSeeder first.');
            return;
        }

        $voyages = Voyage::take(2)->get();

        if ($voyages->isEmpty()) {
            $this->command->warn('No voyages found. Run VoyageSeeder first.');
            return;
        }

        $commande = Commande::create([
            'id_client' => $client->id,
            'date_comm' => Carbon::now(),
            'status'    => 'PENDING',
        ]);

        foreach ($voyages as $voyage) {
            $commande->voyages()->attach($voyage->id, [
                'qte' => 1
            ]);
        }
    }
}