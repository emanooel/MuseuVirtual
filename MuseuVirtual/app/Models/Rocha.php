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
        'jazida_id', // Adicionado para permitir preenchimento via create/update
    ];

    public function periodo()
    {
        return $this->belongsTo(Periodo::class);
    }

    public function fotos()
    {
        return $this->hasMany(Fotos::class, 'idRocha');
    }

    public function jazida()
    {
        return $this->belongsTo(Jazida::class);
    }
}
