<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locacoes;

class LocacoesController extends Controller
{
    public function index()
    {
        return Locacoes::all();
    }

    public function show(Locacoes $locacoes)
    {
        return $locacoes;
    }

    public function store(Request $request)
    {
        $locacoes = Locacoes::create($request->all());

        return response()->json($locacoes, 201);
    }

    public function update(Request $request, $id)
    {
        $locacoes = Locacoes::findOrFail($id);
        $locacoes->update($request->all());

        return response()->json($locacoes, 200);
    }

    public function delete(Request $request, $id)
    {
        $locacoes = Locacoes::findOrFail($id);
        $locacoes->delete();

        return response()->json(null, 204);
    }
}