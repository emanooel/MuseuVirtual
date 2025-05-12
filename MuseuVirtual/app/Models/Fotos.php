<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fotos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'idRocha',
        'idMineral',
        'idJazida',
        'capa',
    ];
}
