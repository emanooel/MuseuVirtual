<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mineral extends Model
{
    protected $filable = [
        'id',
        'nome',
        'descricao',
        'propriedades',
    ];
}