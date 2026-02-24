<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'client2@mail.com'],
            [
                'password' => Hash::make('password'),
                'nom'      => 'Berrada',
                'prenom'   => 'Hassan',
                'tel'      => '0600000002',
                'role'     => 'USER',
            ]
        );
    }
}