<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PermissaoController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard/Permissoes/Index', ['permissoes' => Permission::orderBy('name')->get()]);
    }

    public function create()
    {
        return Inertia::render('Dashboard/Permissoes/Create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|unique:permissions']);

        Permission::create(['name' => $request->name]);

        return redirect()->route('permissoes.index')
            ->with('success', 'Permissão criada.');
    }

    public function edit(Permission $permissao)
    {
        return Inertia::render('Dashboard/Permissoes/Edit', [
            'permissao' => $permissao
        ]);
    }

    public function update(Request $request, Permission $permissao)
    {
        $request->validate([
            'nome' => 'required|unique:permissions,name,' . $permissao->id,
        ]);

        $permissao->update(['name' => $request->nome]);

        return redirect()->route('permissoes.index')
            ->with('success', 'Permissão atualizada.');
    }

    public function destroy(string $id)
    {
        $permission = Permission::findOrFail($id);
        $permission->delete();
    }
}
