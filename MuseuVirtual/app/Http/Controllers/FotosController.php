<?php

namespace App\Http\Controllers;

use App\Models\Fotos;
use App\Models\Rocha;
use Illuminate\Http\Request;

class FotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotos = Fotos::all();
        return view('dashboard.fotos.index', ['fotos'=>$fotos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rochas = Rocha::all();
        return view('dashboard.fotos.create',compact('rochas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Fotos::create($request->all());
        return redirect()->route('fotos-index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fotos $fotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
public function edit($id)
{
    $fotos = Fotos::where('id', $id)->first();
    if (!empty($fotos)) {
        return view('dashboard.fotos.edit', ['fotos' => $fotos]);
    } else {
        return redirect()->route('fotos-index');
    }
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = [
            'idRocha' => $request->idRocha,
            'idMineral' => $request->idMineral,
            'idJazida' => $request->idJazida,
            'capa' => $request->capa,
        ];
        Fotos::where( 'id',$id)->update($data);
        return redirect()->route('fogos-index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Fotos::where('id',$id)->delete();
        return redirect()->route('fotos-index');
    }
}
