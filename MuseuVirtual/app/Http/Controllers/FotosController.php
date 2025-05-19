<?php

namespace App\Http\Controllers;

use App\Models\Fotos;
use App\Models\Jazida;
use App\Models\Mineral;
use App\Models\Rocha;
use Illuminate\Http\Request;

class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotos = Fotos::with('rocha')->get();
        return view('dashboard.fotos.index', ['fotos' => $fotos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rochas = Rocha::all();
        $minerais = Mineral::all();
        $jazidas = Jazida::all();
        return view('dashboard.fotos.create', compact('rochas', 'minerais', 'jazidas'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $foto = new Fotos();
       // Define o local de upload
        $diretorio = 'fotos/geral'; // Padrão
        if ($request->filled('idRocha')) {
            $foto->idRocha = $request->idRocha;
            $diretorio = 'fotos/rochas';
        } 
        elseif ($request->filled('idMineral')) {
            $foto->idMineral = $request->idMineral;
            $diretorio = 'fotos/minerais';
        } 
        elseif ($request->filled('idJazida')) {
            $foto->idJazida = $request->idJazida;
            $diretorio = 'fotos/jazidas';
        }

        if ($request->hasFile("foto")) {
            $arquivo = $request->file("foto");
            $nome = time() . "_" . $arquivo->getClientOriginalName();
            $caminho = $arquivo->storeAs($diretorio, $nome, 'public');
            $foto->caminho = $caminho;
        }

        $foto->capa = $request->capa ?? false;

        $foto->save();

        return redirect()->route('fotos-index')->with('success', 'Foto enviada com sucesso!');
    }
    /**
     * Display the specified resource.
     */
    public function show(Fotos $fotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $fotos = Fotos::where('id', $id)->first();
        if (!empty($fotos)) {
            return view('dashboard.fotos.edit', ['fotos' => $fotos]);
        } else {
            return redirect()->route('fotos-index');
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'idRocha' => $request->idRocha,
            'idMineral' => $request->idMineral,
            'idJazida' => $request->idJazida,
            'capa' => $request->capa,
        ];
        Fotos::where('id', $id)->update($data);
        return redirect()->route('fotos-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Fotos::where('id', $id)->delete();
        return redirect()->route('fotos-index');
    }
}