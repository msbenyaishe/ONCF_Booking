<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'login',
        'password',
        'nom',
        'prenom',
        'email',
        'tel',
        'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * A client can have many commandes
     */
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'id_client');
    }
}