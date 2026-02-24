<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billet extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_voyage',
        'id_commande',
        'qte',
    ];

    /**
     * A billet belongs to a voyage
     */
    public function voyage()
    {
        return $this->belongsTo(Voyage::class, 'id_voyage');
    }

    /**
     * A billet belongs to a commande
     */
    public function commande()
    {
        return $this->belongsTo(Commande::class, 'id_commande');
    }
}