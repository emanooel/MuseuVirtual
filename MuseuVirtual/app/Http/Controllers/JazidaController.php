<?php

namespace App\Http\Controllers;

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
        ]);

        Jazida::create($request->all());

        return redirect()->route('jazidas.index')->with('success', 'Jazida criada com sucesso!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jazida $jazida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jazida $jazida)
    {
        //
    }
}
