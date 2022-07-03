<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usiario extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'Usuarios';
    protected $primaryKey = 'id';

     protected $fillable = [
        'id',
        'nombre',
        'apellidoP',
        'apellidoM',
        'usuario',
        'contrasena',
        'correo',
        'telefono',
        'direccion',
        'estado',
        'municipio'
    ];
}
