<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipos extends Model
{
    use HasFactory;

    public static function getEquipoName(){
        return Model::select('select nombre from equipos where id_equipo = ', 1 );
    }

}
