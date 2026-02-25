<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoyageSeeder extends Seeder
{
    public function run(): void
    {
        // Safely delete existing voyages
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Voyage::query()->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $cities = [
            'Rabat', 'Casablanca', 'Marrakech', 'Fès', 'Tanger',
            'Meknès', 'Safi', 'Agadir', 'Kenitra', 'Settat',
            'Khouribga', 'El Jadida', 'Nador', 'Oujda'
        ];

        $counter = 1;
        $voyages = [];

        foreach ($cities as $from) {
            foreach ($cities as $to) {
                if ($from !== $to) {
                    // Only ONE journey per from→to
                    $heureDepart = date('H:i:s', strtotime('+'.rand(6,22).' hours'));
                    $dureeMinutes = rand(60, 300);
                    $heureDarrivee = date('H:i:s', strtotime($heureDepart . " +$dureeMinutes minutes"));

                    $voyages[] = [
                        'code_voyage'   => 'ONCF' . str_pad($counter, 4, '0', STR_PAD_LEFT),
                        'villeDepart'   => $from,
                        'villeDarrivee' => $to,
                        'heureDepart'   => $heureDepart,
                        'heureDarrivee' => $heureDarrivee,
                        'prixVoyage'    => rand(40, 250),
                        'created_at'    => now(),
                        'updated_at'    => now(),
                    ];

                    $counter++;
                }
            }
        }

        // Insert all at once
        Voyage::insert($voyages);
    }
}