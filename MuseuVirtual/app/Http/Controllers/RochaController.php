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
    public function store(Request $request)
    {
        if ($request->hasFiles('nome', 'descricao', 'composicao')){
            $rochNome = $request->nome;
            $rochDesc = $request->descricao;
            $rochComp = $request->composicao;
            $rocha = Rocha::create([
                'nome'=>$request->nome,
                'descricao'=>$request->descricao,
                'composicao'=>$request->composicao,
            ]);
            return view('dashboard.rocha.index');
        }
        return view('dashboard.rocha.index');
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'sometimes|required|string|max:255',  // 'nome' será requerido apenas se for preenchido
            'descricao' => 'nullable|string',
            'composicao' => 'nullable|string',
        ]);

        $rocha = Rocha::findOrFail($id);

        if ($request->filled('nome')) {
            $rocha->nome = $request->nome;
        }
    
        if ($request->filled('descricao')) {
            $rocha->descricao = $request->descricao;
        }
    
        if ($request->filled('composicao')) {
            $rocha->composicao = $request->composicao;
        }
    
        $rocha->save();
    
        return redirect()->route('dashboard.rocha.index')->with('success', 'Rocha atualizada com sucesso!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rocha $rocha)
    {
        $roch = Rocha::findOrFail($rocha);
        $roch->delete();
        
        $rochas = Rocha::paginate(10);  // 10 rochas por página

        return redirect()->route('dashboard.rocha.index', 'rochas')->with('success', 'Rocha deletada com sucesso!');
    }
}
