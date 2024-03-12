<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    protected $fillable = [
        'marque', 'couleur', 'nombre_de_place', 'depart', 'arriver',
    ];
}
