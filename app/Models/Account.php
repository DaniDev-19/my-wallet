<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    /** @use HasFactory<\Database\Factories\AccountsFactory> */
    use HasFactory;

    protected $fillable = ['plataforma', 'categoria', 'usuario', 'email', 'password', 'url_acceso', 'descripcion', 'es_activa'];


    protected function casts(): array
    {
        return [
            'usuario' => 'encrypted',
            'email' => 'encrypted',
            'password' => 'encrypted',
            'descripcion' => 'encrypted',
            'es_activa' => 'boolean',
        ];
    }
}
