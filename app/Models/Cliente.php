<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'fechanacimiento',
        'idmembresia',
    ];

    public function membresia()
{
    return $this->belongsTo(Membresia::class, 'idmembresia');
}

    public function rentas()
    {
        return $this->hasMany(Renta::class, 'idcliente');
    }
}