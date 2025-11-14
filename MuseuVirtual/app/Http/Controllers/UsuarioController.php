<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     * O spartie permission funciona no sistema roles permission.
     * roles = papel
     * permissions = permissão
     * ou seja, para darmos as permissões de acesso a recursos, essas permissões. 
     * são dadas ao papel(role). e depois essa papel(role) será atribuido a um usuário.
     * terá permissão de fazer coisas, aquele usuário que tiver aquele papel(role).
     * no momento, teremos apenas a role administrador.
     * o papel de administrador poderá fazer tudo.
     */
    public function index()
    {
        //Deve retornar uma lista com usuários já cadastrados.
        //Como já tem spartie Permission neste projeto, já podemos restringir o
        //acesso a essa lista somente a usuários do tipo administrador.
        // lendo a documentação do spartie permission é mostrado como isto é feito.
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //aqui será um atalho rapido para criarmos os usuários.
        // Como toda função create do laravel, deverá retornar uma view para
        // cadastro de novos usuários.
        // deve ser permitido escolher o papel do usuário cadastrado.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //aqui é onde os usuários serão persistidos no banco de dados.
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
