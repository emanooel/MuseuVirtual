<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rocha extends Model
{
    protected $fillable = [
        'id',
        'nome',
        'descricao',
        'composicao',
        'tipo',
    ];
    public function fotos(){
        return $this->hasMany(Fotos::class, 'idRocha' );
    }

}
