<?php

namespace App\Http\Controllers;

use App\Models\Musicas;
use Illuminate\Http\Request;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
                $requestImg = $request->imagem;
                $imgExtension = $requestImg->extension();
                $imageName = md5($requestImg->getClientOriginalName() . strtotime('now')) . "." . $imgExtension;
                $requestImg->move(public_path('img/musicasimg'), $imageName);
                if ($request->hasFile('musica') && $request->file('musica')->isValid()) {
                    $requestMsc = $request->musica;
                    $mscExtension = $requestMsc->extension();
                    $mscName = md5($requestMsc->getClientOriginalName() . strtotime('now')) . "." . $mscExtension;
                    $requestMsc->move(public_path('img/musicas'), $mscName);
            
                    $musica = Musicas::create([
                        'nome' => $request->nome,
                        'descricao' => $request->descricao,
                        'imagem' => $imageName,
                        'musica' => $mscName,
                    ]);
                }
            }
            return view('admin');
    }

    /**
     * Display the specified resource.
     */
    public function show($imagem, $tipo = 'preview'){
        if ($tipo === 'preview') {
            // Lista de músicas no formato preview
            $musicasList = Musicas::select('imagem', 'nome', 'id')->limit(20)->get();

            $musicasArray = $musicasList->map(function($musica) {
                return [$musica->imagem, $musica->nome, $musica->id];
            });

            return view('hello', ['musicas' => $musicasArray]);
        }

        // Caso contrário, exibe os dados completos da música
        if ($tipo === 'dados') {
            $musica = Musicas::where('id', $imagem)->first();
            if (!$musica) {
                abort(404, 'Música não encontrada');
            }
            $nome = $musica->nome;
            $imagem = $musica->imagem;
            $descricao = $musica->descricao;
            $musicaFile = $musica->musica;

            return view('viewMusic', ['nome' => $nome, 'msc' =>$musicaFile, 'img'=>$imagem, 'info' =>$descricao]);
        }

    }






    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Musicas $Musicas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Musicas $Musicas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Musicas $Musicas)
    {
        //
    }
}
