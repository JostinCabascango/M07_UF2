<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    // Nombre de la tabla en la base de datos
    protected $table = 'usuarios';
    // Campos que se pueden rellenar en la base de datos
    protected $fillable = [
        'name',
        'surname',
        'password',
        'email',
        'role',
        'active'
    ];
    protected $hidden = [
        'password', // Oculta el campo 'password' en las consultas
    ];
    protected $casts = [];
}
