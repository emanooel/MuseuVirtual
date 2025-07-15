<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jazida extends Model
{
    use HasFactory;

    protected $fillable = [
        'localizacao', 
        'descricao', 
    ];

    public function fotos()
    {
        return $this->hasMany(Fotos::class, 'idJazida');
    }

    public function rochas()
    {
        return $this->hasMany(Rocha::class);
    }
}
