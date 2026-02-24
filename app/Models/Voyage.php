<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'code_voyage',
        'heureDepart',
        'villeDepart',
        'heureDarrivee',
        'villeDarrivee',
        'prixVoyage',
    ];

    /**
     * A voyage can belong to many commandes
     */
    public function commandes()
    {
        return $this->belongsToMany(
            Commande::class,
            'billets',
            'id_voyage',
            'id_commande'
        )->withPivot('qte');
    }
}