<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Renta extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecharegistro',
        'fechadevolucion',
        'fechaentrega',
        'idcliente',
        'idpelicula',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'idcliente');
    }

    public function pelicula()
    {
        return $this->belongsTo(Pelicula::class, 'idpelicula');
    }
}