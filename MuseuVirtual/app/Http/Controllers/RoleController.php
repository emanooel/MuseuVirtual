<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Dashboard/Papeis/Index');
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
    public function show(RochaMineral $rochaMineral)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RochaMineral $rochaMineral)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RochaMineral $rochaMineral)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RochaMineral $rochaMineral)
    {
        //
    }
}
