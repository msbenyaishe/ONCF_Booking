<?php

namespace Database\Seeders;

use App\Models\Voyage;
use Illuminate\Database\Seeder;

class VoyageSeeder extends Seeder
{
    public function run(): void
    {
        Voyage::insert([

            // Rabat Routes
            [
                'code_voyage'   => 'ONCF001',
                'heureDepart'   => '08:00:00',
                'villeDepart'   => 'Rabat',
                'heureDarrivee' => '09:00:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 80.00,
            ],
            [
                'code_voyage'   => 'ONCF002',
                'heureDepart'   => '10:00:00',
                'villeDepart'   => 'Rabat',
                'heureDarrivee' => '12:30:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 150.00,
            ],

            // Casablanca Routes
            [
                'code_voyage'   => 'ONCF003',
                'heureDepart'   => '07:30:00',
                'villeDepart'   => 'Casablanca',
                'heureDarrivee' => '11:00:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 120.00,
            ],
            [
                'code_voyage'   => 'ONCF004',
                'heureDepart'   => '13:00:00',
                'villeDepart'   => 'Casablanca',
                'heureDarrivee' => '15:30:00',
                'villeDarrivee' => 'Agadir',
                'prixVoyage'    => 200.00,
            ],

            // Tangier Routes
            [
                'code_voyage'   => 'ONCF005',
                'heureDepart'   => '09:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '11:30:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 140.00,
            ],
            [
                'code_voyage'   => 'ONCF006',
                'heureDepart'   => '16:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '19:00:00',
                'villeDarrivee' => 'Meknès',
                'prixVoyage'    => 130.00,
            ],

            // Fès Routes
            [
                'code_voyage'   => 'ONCF007',
                'heureDepart'   => '06:30:00',
                'villeDepart'   => 'Fès',
                'heureDarrivee' => '08:00:00',
                'villeDarrivee' => 'Meknès',
                'prixVoyage'    => 40.00,
            ],
            [
                'code_voyage'   => 'ONCF008',
                'heureDepart'   => '12:00:00',
                'villeDepart'   => 'Fès',
                'heureDarrivee' => '17:00:00',
                'villeDarrivee' => 'Oujda',
                'prixVoyage'    => 180.00,
            ],

            // Marrakech Routes
            [
                'code_voyage'   => 'ONCF009',
                'heureDepart'   => '08:00:00',
                'villeDepart'   => 'Marrakech',
                'heureDarrivee' => '11:00:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 120.00,
            ],
            [
                'code_voyage'   => 'ONCF010',
                'heureDepart'   => '15:00:00',
                'villeDepart'   => 'Marrakech',
                'heureDarrivee' => '18:30:00',
                'villeDarrivee' => 'Safi',
                'prixVoyage'    => 90.00,
            ],

            // Other Cities
            [
                'code_voyage'   => 'ONCF011',
                'heureDepart'   => '09:00:00',
                'villeDepart'   => 'Kenitra',
                'heureDarrivee' => '10:00:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 30.00,
            ],
            [
                'code_voyage'   => 'ONCF012',
                'heureDepart'   => '11:00:00',
                'villeDepart'   => 'El Jadida',
                'heureDarrivee' => '13:00:00',
                'villeDarrivee' => 'Settat',
                'prixVoyage'    => 60.00,
            ],
            [
                'code_voyage'   => 'ONCF013',
                'heureDepart'   => '14:00:00',
                'villeDepart'   => 'Nador',
                'heureDarrivee' => '19:00:00',
                'villeDarrivee' => 'Oujda',
                'prixVoyage'    => 110.00,
            ],
            [
                'code_voyage'   => 'ONCF014',
                'heureDepart'   => '07:00:00',
                'villeDepart'   => 'Khouribga',
                'heureDarrivee' => '09:30:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 70.00,
            ],
        ]);
    }
}