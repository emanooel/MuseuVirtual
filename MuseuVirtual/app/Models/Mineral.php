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
    public function fotos(){
        return $this->hasMany(Fotos::class, 'idMineral' );
    }

}