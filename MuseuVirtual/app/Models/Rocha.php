<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rocha extends Model
{
    protected $filable = [
        'id',
        'nome',
        'descricao',
        'composicao',
    ];
}
