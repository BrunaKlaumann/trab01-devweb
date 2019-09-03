<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $locacoes = Livro::create($request->all());

        return response()->json($locacoes, 201);
    }

    public function update(Request $request, Locacoes $locacoes)
    {
        $locacoes->update($request->all());

        return response()->json($locacoes, 200);
    }

    public function delete(Locacoes $locacoes)
    {
        $locacoes->delete();

        return response()->json(null, 204);
    }
}