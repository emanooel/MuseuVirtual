<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jazida extends Model
{
    use HasFactory;

    protected $fillable = ['localizacao', 'descricao', 'administrador_id'];
}
