<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $table = 'files';
    protected $fillable = ['name', 'path', 'type', 'extension', 'user_id'];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'user_id'); //user_id es la clave foránea de la tabla files
    }
}
