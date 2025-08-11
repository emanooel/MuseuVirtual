<?php

namespace App\Http\Controllers;

use App\Models\Eon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eons = Eon::with(['eras.periodos'])->get();
        return Inertia::render('Dashboard/Timeline/Timeline', ['eons' => $eons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function update(Request $request, Era $era)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Era $era)
    {
        //
    }
}
