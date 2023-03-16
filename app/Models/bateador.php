<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bateador extends Model
{
    use HasFactory;
    protected $table = 'bateadores';
    protected $primaryKey = 'id_afilacion';

    protected $fillable = ['ab', 'c', 'h', 'cp', 'bb', 'bb', 'k', 'pje', 'obp'];
}
