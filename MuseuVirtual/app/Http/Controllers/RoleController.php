<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return Inertia::render('Dashboard/Papeis/Index', [
        'papeis' => Role::with('permissions')->get()
            ->map(function ($role) {
                return [
                    'id' => $role->id,
                    'name' => $role->name,
                    'permissions' => $role->permissions->pluck('name'),
                ];
            }),
    ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permissoes = Permission::orderBy('name', 'ASC')->get();
        return Inertia::render('Dashboard/Papeis/Create', ['permissoes' => $permissoes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
            'permissions' => 'array'
        ]);

        $role = Role::create(['name' => $request->name]);

        if ($request->permissions) {
            $role->syncPermissions($request->permissions);
        }

        return redirect()->route('papeis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $papel = Role::findOrFail($id);
        $hasPermissions = $papel->permissions->pluck('name');
        $permissoes = Permission::orderBy('name','ASC')->get();

        return Inertia::render('Dashboard/Papeis/Edit', [
            'permissoes' => $permissoes,
            'hasPermissions' => $hasPermissions,
            'papel' => $papel,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $papel = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:roles,name,' . $id
        ]);

        $papel->update([
            'name' => $request->name
        ]);

        if ($request->has('permissions')) {
            $papel->syncPermissions($request->permissions);
        }

        return redirect()
            ->route('papeis.index')
            ->with('success', 'Papel atualizado com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $role = Role::find($id);

        $role->delete();
    }
}
