<?php

namespace App\Http\Controllers;

use App\Models\Fotos;
use App\Models\Jazida;
use Illuminate\Http\Request;

class JazidaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jazidas = Jazida::get();
        return view('dashboard.jazidas.index', compact('jazidas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.jazidas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'localizacao' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'foto.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $jazida = Jazida::create($request->only(['localizacao', 'descricao']));

        // Processar upload de fotos
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $arquivo) {
                $foto = new Fotos([
                    'idJazida' => $jazida->id,
                    'caminho' => $arquivo->store('fotos/jazidas', 'public'),
                    'capa' => $arquivo->getClientOriginalName() === $request->capa_nome ? 1 : 0
                ]);
                $foto->save();
            }
        }

        return redirect()->route('jazidas.index')->with('success', 'Jazida cadastrada com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Jazida $jazida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jazida $jazida)
    {
        return view('dashboard.jazidas.edit', compact('jazida'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jazida $jazida)
    {
        $request->validate([
            'localizacao' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'foto.*' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $jazida->update($request->only(['localizacao', 'descricao']));

        // Processar novas fotos, se houver
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $arquivo) {
                $foto = new Fotos([
                    'idJazida' => $jazida->id,
                    'caminho' => $arquivo->store('fotos/jazidas', 'public'),
                    'capa' => $arquivo->getClientOriginalName() === $request->capa_nome ? 1 : 0
                ]);
                $foto->save();
            }
        }

        return redirect()->route('jazidas.index')->with('success', 'Jazida atualizada com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jazida $jazida)
    {
        $jazida->delete();
        return redirect()->route('jazidas.index')->with('success', 'Jazida excluída com sucesso!');
    }

}
