<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ampayer extends Model
{
    protected $table = 'ampayer';
    protected $primaryKey = 'id_ampayer';

    protected $fillable = ['nombre', 'apellidos', 'curp', 'fecha_nac', 'estado'];
    
    use HasFactory;
}
