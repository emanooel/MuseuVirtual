<?php

namespace App\Http\Controllers;

use App\Models\Rocha;
use Illuminate\Http\Request;

class RochaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rochas = Rocha::paginate(10);  // 10 rochas por página
        return view('dashboard.rocha.index', compact('rochas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.rocha.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'composicao' => 'required|string',
            'tipo' => 'required|integer',
        ]);

        Rocha::create($validated);

        return redirect()->route('Rocha.index')->with('success', 'Rocha criada com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(Rocha $rocha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $rocha = Rocha::findOrFail($id);

        return view('dashboard.rocha.edit', compact('rocha'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rocha $rocha)
    {
        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string',
            'composicao' => 'nullable|string',
            'tipo' => 'required|integer',
        ]);

        // Atualizando apenas os campos que foram enviados
        if ($request->filled('nome')) {
            $rocha->nome = $request->nome;
        }

        if ($request->filled('descricao')) {
            $rocha->descricao = $request->descricao;
        }

        if ($request->filled('composicao')) {
            $rocha->composicao = $request->composicao;
        }

        if ($request->filled('tipo')) {
            $rocha->tipo = $request->tipo;
        }

        $rocha->save();

        return redirect()->route('Rocha.index')->with('success', 'Rocha atualizada com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rocha $rocha)
    {
        $rocha->delete();
        
        $rochas = Rocha::paginate(10);  // 10 rochas por página

        return redirect()->route('Rocha.index', 'rochas')->with('success', 'Rocha deletada com sucesso!');
    }

    public function apiListRocha(){
        $rochas = Rocha::all();
        return json_encode($rochas);
    }
}
