<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Fotos extends Model
{
    use HasFactory;
    public function rocha(){
        return $this->belongsTo(Rocha::class, 'idRocha');
    }
    public function mineral(){
        return $this->belongsTo(Mineral::class, 'idMineral');
    }
    public function jazida(){
        return $this->belongsTo(Jazida::class,'idJazida');
    }
    protected $fillable = [
        'id',
        'idRocha',
        'idMineral',
        'idJazida',
        'capa',
        'caminho',
    ];
}
