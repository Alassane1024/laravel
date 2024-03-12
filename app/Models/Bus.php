<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    protected $fillable = [
        'marque',
        'couleur',
        'nombre_de_places',
        'depart',
        'arrivee',
        'frais_de_transport',
    ];
}
