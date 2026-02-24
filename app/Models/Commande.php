<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_client',
        'date_comm',
    ];

    /**
     * A commande belongs to one client
     */
    public function client()
    {
        return $this->belongsTo(User::class, 'id_client');
    }

    /**
     * A commande contains many voyages
     */
    public function voyages()
    {
        return $this->belongsToMany(
            Voyage::class,
            'billets',
            'id_commande',
            'id_voyage'
        )->withPivot('qte');
    }
}