<?php

namespace App\Http\Controllers;

use App\Models\Rocha;
use App\Models\Jazida;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse; // Para type-hinting de retorno
use Illuminate\Http\JsonResponse; // Para type-hinting de retorno de API
use Inertia\Inertia;
use SimpleSoftwareIO\QrCode\Facades\QrCode; // Certifique-se de ter o pacote instalado

class RochaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rochas = Rocha::with('fotos')->paginate(10)->withPath(url()->current());  // 10 rochas por página
        // dd($rochas);
        return Inertia::render('Dashboard/Rochas/Index', [
            'rochas' => $rochas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Dashboard/Rochas/Create');

        $jazidas = Jazida::all(['id', 'descricao']); // ou 'localizacao', se preferir

        return Inertia::render('Dashboard/Rochas/Create', [
            'jazidas' => $jazidas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'composicao' => 'required|string',
            'tipo' => 'required|integer',
            'jazida_id' => 'nullable|exists:jazidas,id',
        ]);


        // Começa aqui a parte de encaminhar para o fotos controller ----------------------------
        $rocha = Rocha::create($validated);

        if ($request->hasFile('foto')) {
            $fotosRequest = new Request([
                "idRocha" => $rocha->id,
                "capa_nome" => $request->input('capa_nome'),
            ]);

            // Encaminha os arquivos
            $fotosRequest->files->set('foto', $request->file('foto'));

            // Chama o controller de fotos
            app(\App\Http\Controllers\FotosController::class)->store($fotosRequest);
        }
        // termina aqui ---------------------------------------------------------------------

        return redirect()->route('rochas.index')->with('success', 'Rocha criada com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $tipo, $rocha)
    {
        // aqui você pode validar se o tipo da URL bate com o da rocha
        // if ($tipo !== $tipo) {
        //     abort(404);
        // }

        $rocha = Rocha::with('fotos')->where('slug', $rocha)->firstOrFail();
        return view('rochaEspecifica', compact('rocha'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {



        $rocha = Rocha::with('fotos')->findOrFail($id);
        $jazidas = Jazida::all(['id', 'descricao']);

        return Inertia::render('Dashboard/Rochas/Edit', [
            'rocha' => $rocha,
            'jazidas' => $jazidas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rocha $rocha)
    {
        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descricao' => 'nullable|string',
            'composicao' => 'nullable|string',
            'tipo' => 'required|integer',
        ]);

        // Atualizando apenas os campos que foram enviados
        if ($request->filled('nome')) {
            $rocha->nome = $request->nome;
        }

        if ($request->filled('descricao')) {
            $rocha->descricao = $request->descricao;
        }

        if ($request->filled('composicao')) {
            $rocha->composicao = $request->composicao;
        }

        if ($request->filled('tipo')) {
            $rocha->tipo = $request->tipo;
        }

        if ($request->filled('jazida_id')) {
            $rocha->jazida_id = $request->jazida_id;
        }

        $rocha->save();

        return redirect()->route('rochas.index')->with('success', 'Rocha atualizada com sucesso!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rocha $rocha)
    {
        foreach ($rocha->fotos as $foto) {
            app(\App\Http\Controllers\FotosController::class)->destroy($foto->id);
        }

        $rocha->delete();
        $rochas = Rocha::paginate(10);  // 10 rochas por página

        return redirect()->route('rochas.index', 'rochas')->with('success', 'Rocha deletada com sucesso!');
    }

    public function apiListRocha()
    {
        $rochas = Rocha::all();
        return json_encode($rochas);
    }

    public function site()
    {
        $rochastipo1 = Rocha::where("tipo", 1)->with("fotos")->paginate(12);
        $rochastipo2 = Rocha::where("tipo", 2)->with("fotos")->paginate(12);
        $rochastipo3 = Rocha::where("tipo", 3)->with("fotos")->paginate(12);
        // dd($rochas);
        return view('rochas', compact("rochastipo1", "rochastipo2", "rochastipo3"));
    }

    public function gerarQrCode($id)
    {
        $rocha = Rocha::findOrFail($id);
        $url = route('Rocha.show', $rocha->id); // ou use slug se tiver
        $qrCode = QrCode::format('png')->size(300)->generate($url);

        return response($qrCode)
            ->header('Content-Type', 'image/png')
            ->header('Content-Disposition', 'attachment; filename="rocha_' . $rocha->id . '_qr.png"');
    }
    public function site_tipo_rocha($tipo)
    {
        $rochastipo = Rocha::where('tipo', $tipo)->with('fotos')->get();
        return view('rocha_tipo', compact('rochastipo', 'tipo'));
    }

    public function site_show($id)
    {
        $rocha = Rocha::with('fotos')->findOrFail($id);
        return view('rochaEspecifica', compact('rocha'));
    }
}
