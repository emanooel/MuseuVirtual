<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jazida extends Model
{
    use HasFactory;
    public function fotos(){
        return $this->hasMany(Fotos::class, 'idJazida' );
    }
    protected $fillable = [
        'localizacao', 
        'descricao', 
    ];
}
