<?php

namespace App\Http\Controllers;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        return Inertia::render('Dashboard/Usuarios/Index', [
        'usuarios' => User::with('roles:id,name')->select('id', 'name', 'email')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $papeis = Role::orderBy('name', 'ASC')->get();
        return Inertia::render('Dashboard/Usuarios/Create', ['papeis' => $papeis]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validacao = Validator::make($request->all(),[
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|same:confirm_password',
            'confirm_password' => 'required'
        ], [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O nome deve ter pelo menos 2 caracteres.',
            'email.required' => 'O campo e-mail é obrigatório.',
            'email.email' => 'Informe um e-mail válido.',
            'email.unique' => 'Este e-mail já está em uso.',
            'password.min' => 'A senha deve ter no mínimo 8 caracteres.',
            'password.required' => 'O campo senha é obrigatório.',
        ]);

        if ($validacao->fails()) {
            return redirect()->route('usuarios.create')->withInput()->withErrors($validacao);
        }

        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = Hash::make($request->password);
        $usuario->save();
        $usuario->syncRoles($request->role);
        return redirect()->route('usuarios.index')->with('success', 'Usuário adicionado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::with('roles:id,name')->findOrFail($id);
        $papeis = Role::orderBy('name', 'ASC')->get();
        return Inertia::render('Dashboard/Usuarios/Edit', [
        'usuario' => $usuario,
        'papeis' => $papeis
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario = User::findOrFail($id);
        $validacao = Validator::make($request->all(),[
            'name' => 'required|min:1',
            'email' => 'required|email|unique:users,email,'.$id.',id'
        ]);

        if ($validacao->fails()) {
            return redirect()->route('usuarios.edit', $id)->withInput()->withErrors($validacao);
        }

        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->save();
        $usuario->syncRoles($request->role);
        return redirect()->route('usuarios.index', $id)->with('sucess', 'Usuário atualizado com sucesso.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
