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
                        [
                'code_voyage'   => 'ONCF015',
                'heureDepart'   => '10:00:00',
                'villeDepart'   => 'Safi',
                'heureDarrivee' => '13:30:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 90.00,
            ],

            // Agadir Routes
            [
                'code_voyage'   => 'ONCF016',
                'heureDepart'   => '08:00:00',
                'villeDepart'   => 'Agadir',
                'heureDarrivee' => '12:00:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 200.00,
            ],

            // Settat Routes
            [
                'code_voyage'   => 'ONCF017',
                'heureDepart'   => '09:00:00',
                'villeDepart'   => 'Settat',
                'heureDarrivee' => '10:30:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 60.00,
            ],


            // Rabat (more destinations)
            [
                'code_voyage'   => 'ONCF018',
                'heureDepart'   => '14:00:00',
                'villeDepart'   => 'Rabat',
                'heureDarrivee' => '16:30:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 110.00,
            ],
            [
                'code_voyage'   => 'ONCF019',
                'heureDepart'   => '18:00:00',
                'villeDepart'   => 'Rabat',
                'heureDarrivee' => '21:30:00',
                'villeDarrivee' => 'Tanger',
                'prixVoyage'    => 140.00,
            ],

            // Casablanca (more destinations)
            [
                'code_voyage'   => 'ONCF020',
                'heureDepart'   => '06:00:00',
                'villeDepart'   => 'Casablanca',
                'heureDarrivee' => '09:00:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 80.00,
            ],
            [
                'code_voyage'   => 'ONCF021',
                'heureDepart'   => '17:00:00',
                'villeDepart'   => 'Casablanca',
                'heureDarrivee' => '22:00:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 120.00,
            ],

            // Fès (more destinations)
            [
                'code_voyage'   => 'ONCF022',
                'heureDepart'   => '09:30:00',
                'villeDepart'   => 'Fès',
                'heureDarrivee' => '13:30:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 110.00,
            ],
            [
                'code_voyage'   => 'ONCF023',
                'heureDepart'   => '15:00:00',
                'villeDepart'   => 'Fès',
                'heureDarrivee' => '19:00:00',
                'villeDarrivee' => 'Tanger',
                'prixVoyage'    => 150.00,
            ],

            // Marrakech (more destinations)
            [
                'code_voyage'   => 'ONCF024',
                'heureDepart'   => '07:00:00',
                'villeDepart'   => 'Marrakech',
                'heureDarrivee' => '12:00:00',
                'villeDarrivee' => 'Agadir',
                'prixVoyage'    => 160.00,
            ],
            [
                'code_voyage'   => 'ONCF025',
                'heureDepart'   => '19:00:00',
                'villeDepart'   => 'Marrakech',
                'heureDarrivee' => '23:30:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 190.00,
            ],

            // Agadir (more destinations)
            [
                'code_voyage'   => 'ONCF026',
                'heureDepart'   => '06:30:00',
                'villeDepart'   => 'Agadir',
                'heureDarrivee' => '11:30:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 160.00,
            ],
            [
                'code_voyage'   => 'ONCF027',
                'heureDepart'   => '13:00:00',
                'villeDepart'   => 'Agadir',
                'heureDarrivee' => '19:00:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 210.00,
            ],

            // Tanger (more destinations)
            [
                'code_voyage'   => 'ONCF028',
                'heureDepart'   => '08:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '11:00:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 140.00,
            ],
            [
                'code_voyage'   => 'ONCF029',
                'heureDepart'   => '16:30:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '20:30:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 150.00,
            ],
            // Kenitra
            [
                'code_voyage'   => 'ONCF030',
                'heureDepart'   => '07:00:00',
                'villeDepart'   => 'Kenitra',
                'heureDarrivee' => '08:30:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 70.00,
            ],
            [
                'code_voyage'   => 'ONCF031',
                'heureDepart'   => '15:00:00',
                'villeDepart'   => 'Kenitra',
                'heureDarrivee' => '17:30:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 110.00,
            ],

            // Meknès
            [
                'code_voyage'   => 'ONCF032',
                'heureDepart'   => '09:00:00',
                'villeDepart'   => 'Meknès',
                'heureDarrivee' => '10:30:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 40.00,
            ],
            [
                'code_voyage'   => 'ONCF033',
                'heureDepart'   => '17:00:00',
                'villeDepart'   => 'Meknès',
                'heureDarrivee' => '19:30:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 100.00,
            ],

            // Oujda
            [
                'code_voyage'   => 'ONCF034',
                'heureDepart'   => '06:00:00',
                'villeDepart'   => 'Oujda',
                'heureDarrivee' => '11:30:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 180.00,
            ],
            [
                'code_voyage'   => 'ONCF035',
                'heureDepart'   => '14:00:00',
                'villeDepart'   => 'Oujda',
                'heureDarrivee' => '20:30:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 220.00,
            ],

            // El Jadida
            [
                'code_voyage'   => 'ONCF036',
                'heureDepart'   => '08:00:00',
                'villeDepart'   => 'El Jadida',
                'heureDarrivee' => '10:00:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 50.00,
            ],
            [
                'code_voyage'   => 'ONCF037',
                'heureDepart'   => '16:00:00',
                'villeDepart'   => 'El Jadida',
                'heureDarrivee' => '18:30:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 120.00,
            ],

            // Khouribga
            [
                'code_voyage'   => 'ONCF038',
                'heureDepart'   => '06:30:00',
                'villeDepart'   => 'Khouribga',
                'heureDarrivee' => '08:00:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 60.00,
            ],
            [
                'code_voyage'   => 'ONCF039',
                'heureDepart'   => '18:00:00',
                'villeDepart'   => 'Khouribga',
                'heureDarrivee' => '20:00:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 110.00,
            ],

            // Safi
            [
                'code_voyage'   => 'ONCF040',
                'heureDepart'   => '07:30:00',
                'villeDepart'   => 'Safi',
                'heureDarrivee' => '10:30:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 90.00,
            ],
            [
                'code_voyage'   => 'ONCF041',
                'heureDepart'   => '14:30:00',
                'villeDepart'   => 'Safi',
                'heureDarrivee' => '17:00:00',
                'villeDarrivee' => 'Agadir',
                'prixVoyage'    => 120.00,
            ],

            // Settat
            [
                'code_voyage'   => 'ONCF042',
                'heureDepart'   => '08:30:00',
                'villeDepart'   => 'Settat',
                'heureDarrivee' => '09:45:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 60.00,
            ],
            [
                'code_voyage'   => 'ONCF043',
                'heureDepart'   => '17:30:00',
                'villeDepart'   => 'Settat',
                'heureDarrivee' => '19:00:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 80.00,
            ],
            
            [
                'code_voyage'   => 'ONCF044',
                'heureDepart'   => '06:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '08:30:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 140.00,
            ],
            [
                'code_voyage'   => 'ONCF045',
                'heureDepart'   => '12:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '14:30:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 140.00,
            ],
            [
                'code_voyage'   => 'ONCF046',
                'heureDepart'   => '18:30:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '21:00:00',
                'villeDarrivee' => 'Rabat',
                'prixVoyage'    => 150.00,
            ],

            // Tanger → Casablanca
            [
                'code_voyage'   => 'ONCF047',
                'heureDepart'   => '07:30:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '11:00:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 160.00,
            ],
            [
                'code_voyage'   => 'ONCF048',
                'heureDepart'   => '15:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '18:30:00',
                'villeDarrivee' => 'Casablanca',
                'prixVoyage'    => 160.00,
            ],

            // Tanger → Fès
            [
                'code_voyage'   => 'ONCF049',
                'heureDepart'   => '08:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '12:00:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 150.00,
            ],
            [
                'code_voyage'   => 'ONCF050',
                'heureDepart'   => '17:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '21:00:00',
                'villeDarrivee' => 'Fès',
                'prixVoyage'    => 150.00,
            ],

            // Tanger → Meknès
            [
                'code_voyage'   => 'ONCF051',
                'heureDepart'   => '09:30:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '13:00:00',
                'villeDarrivee' => 'Meknès',
                'prixVoyage'    => 130.00,
            ],
            [
                'code_voyage'   => 'ONCF052',
                'heureDepart'   => '19:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '22:30:00',
                'villeDarrivee' => 'Meknès',
                'prixVoyage'    => 130.00,
            ],

            // Tanger → Kenitra
            [
                'code_voyage'   => 'ONCF053',
                'heureDepart'   => '06:45:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '08:15:00',
                'villeDarrivee' => 'Kenitra',
                'prixVoyage'    => 90.00,
            ],
            [
                'code_voyage'   => 'ONCF054',
                'heureDepart'   => '14:15:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '15:45:00',
                'villeDarrivee' => 'Kenitra',
                'prixVoyage'    => 90.00,
            ],

            // Tanger → Marrakech (long route)
            [
                'code_voyage'   => 'ONCF055',
                'heureDepart'   => '07:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '13:30:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 220.00,
            ],
            [
                'code_voyage'   => 'ONCF056',
                'heureDepart'   => '16:00:00',
                'villeDepart'   => 'Tanger',
                'heureDarrivee' => '22:30:00',
                'villeDarrivee' => 'Marrakech',
                'prixVoyage'    => 220.00,
            ],
        ]);
    }
}