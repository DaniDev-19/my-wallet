<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'banco',
        'nombre_tarjeta',
        'titular',
        'tarjeta_enmascarada',
        'franquicia',
        'tarjeta_numero',
        'fecha_vencimiento',
        'cvv',
        'notas'
    ];

    protected function casts(): array
    {
        return [
            'tarjeta_numero'    => 'encrypted',
            'fecha_vencimiento' => 'encrypted',
            'cvv'               => 'encrypted',
            'notas'             => 'encrypted', 
        ];
    }
}
