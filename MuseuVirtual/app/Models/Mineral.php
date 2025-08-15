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
        'idJazida',
    ];
    public function fotos()
    {
        return $this->hasMany(Fotos::class, 'idMineral');
    }
    public function jazida()
    {
        return $this->belongsTo(Jazida::class, 'idJazida');
    }
}
