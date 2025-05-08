<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mineral extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'propriedades',
    ];
}