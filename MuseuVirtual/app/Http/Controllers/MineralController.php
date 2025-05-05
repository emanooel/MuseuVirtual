<?php

namespace App\Http\Controllers;
use App\Models\Mineral;
use Illuminate\Http\Request;
class MineralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $minerais = Mineral::all();
        return view('dashboard.minerais.index', compact('minerais'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.minerais.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $mineral = new Mineral;
        $mineral -> nome = $request -> nome;
        $mineral -> descricao = $request -> descricao;
        $mineral -> propriedades = $request -> propriedades;
        $mineral -> save();

        return redirect('/minerais/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mineral $mineral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mineral $mineral)
    {
        return view('dashboard.minerais.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mineral $mineral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mineral $mineral)
    {
        //return view('dashboard.minerais.delete');
    }
}