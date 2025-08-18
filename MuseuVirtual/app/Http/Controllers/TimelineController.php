<?php

namespace App\Http\Controllers;
use App\Models\Eon;
use App\Models\Era;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Jazida;
use App\Models\Mineral;
use App\Models\Rocha;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eons = Eon::with(['eras.periodos.rochas'])->get();
        return Inertia::render('Dashboard/Timeline/Timeline', ['eons' => $eons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Dashboard/Timeline/Create', [
            'rochas' => Rocha::all(),
            'minerais' => Mineral::all(),
            'jazidas' => Jazida::all(),
            'idRochas' => request('idRocha'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Era $era)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Era $era)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
        'era' => 'required|string|max:255',
        'periodo' => 'required|string|max:255',
        'idRocha' => 'nullable|exists:rochas,id',
        'idMineral' => 'nullable|exists:minerais,id'
    ]);

    if ($request->filled('idRocha')) {
        $rocha = Rocha::findOrFail($request->idRocha);
        $rocha->era = $request->era;
        $rocha->periodo = $request->periodo;
        $rocha->save();
    } elseif ($request->filled('idMineral')) {
        $mineral = Mineral::findOrFail($request->idMineral);
        $mineral->era = $request->era;
        $mineral->periodo = $request->periodo;
        $mineral->save();
    }

    return back()->with('success', 'Associação atualizada!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Era $era)
    {
        //
    }
}
