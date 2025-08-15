<?php

namespace App\Http\Controllers;

use App\Models\Fotos;
use App\Models\Jazida;
use App\Models\Mineral;
use App\Models\Rocha;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $fotosRecentes = Fotos::with(['rocha', 'mineral', 'jazida'])
            ->whereNotNull('idRocha')
            ->orWhereNotNull('idMineral')
            ->orWhereNotNull('idJazida')
            ->latest()
            ->take(6) // Exemplo: Pega as 6 fotos mais recentes
            ->get();



        return view("home", compact('fotosRecentes'));
    }
}
