<?php

namespace App\Http\Controllers;
use App\Models\Mineral;
use App\Models\Jazida;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; // Para type-hinting de retorno
use Illuminate\Http\JsonResponse; // Para type-hinting de retorno de API
use Inertia\Inertia;

class MineralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $minerais = Mineral::with('fotos')->get();
        // dd($minerais);
        return Inertia::render('Dashboard/Minerais/Index', ['minerais'=>$minerais]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jazidas = Jazida::all();
        return Inertia::render('Dashboard/Minerais/Create', [
            'jazidas' => $jazidas
        ]);
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
        $mineral -> jazida_id = $request -> idJazida;
        $mineral -> save();
        
        if ($request->hasFile('foto')) {
            $fotosRequest = new Request([
                "idMineral" => $mineral->id,
                "capa_nome" => $request->input('capa_nome'),
            ]);

            // Encaminha os arquivos
            $fotosRequest->files->set('foto', $request->file('foto'));

            // Chama o controller de fotos
            app(\App\Http\Controllers\FotosController::class)->store($fotosRequest);
        }
        return redirect('/minerais/');
    }

    /**
     * Display the specified resource.
     */
    public function show($mineral)
    {
        $mineral = Mineral::with('fotos')->findOrFail($mineral);
        return view('mineralEspecifico',compact('mineral'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $mineral = Mineral::with('fotos')->findOrFail($id);
        $jazidas = Jazida::all();

        return Inertia::render('Dashboard/Minerais/Edit', [
            'mineral' => $mineral,
            'jazidas' => $jazidas,
        ]);
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mineral $mineral)
    {
        // dd($mineral);
        $mineral = Mineral::with('fotos')->findOrFail($request->id);
        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string',
            'propriedades' => 'nullable|string',
        ]);

        // Atualizando apenas os campos que foram enviados
        if ($request->filled('nome')) {
            $mineral->nome = $request->nome;
        }

        if ($request->filled('descricao')) {
            $mineral->descricao = $request->descricao;
        }

        if ($request->filled('propriedades')) {
            $mineral->propriedades = $request->propriedades;
        }

        if ($request->has('jazida_id')) { # has aceita valores nulos
           $mineral->jazida_id = $request->jazida_id;
        }

        $mineral->save();

        return redirect()->route('minerais.index')->with('success', 'Mineral atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($mineral)
    {
        $mineral = Mineral::findOrFail($mineral);  // Buscar o mineral, antes de alterar os dados
        foreach ($mineral->fotos as $foto) {
            app(\App\Http\Controllers\FotosController::class)->destroy($foto->id);

        }
        
        $mineral->delete();
        $minerais = Mineral::paginate(10);  // 10 rochas por página

        return redirect()->route('minerais.index', 'minerals')->with('success', 'Mineral deletado com sucesso!');
    }
    public function site(){
        $minerais = Mineral::with("fotos")->paginate(10);
        return view('Minerais',compact("minerais"));
    
    }

}
