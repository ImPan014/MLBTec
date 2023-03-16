<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jugadores extends Model
{
    protected $table = 'jugadores';
    protected $primaryKey = 'id_afiliacion';

    protected $fillable = ['nombre', 'apellidos', 'curp', 'fecha_nac', 'estatus'];
    
    use HasFactory;
    use HasFactory;
}
