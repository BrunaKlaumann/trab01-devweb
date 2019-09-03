<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorLivroController extends Controller
{
    public function index()
    {
        return AutorLivro::all();
    }

    public function show(AutorLivro $autorLivro)
    {
        return $autorLivro;
    }

    public function store(Request $request)
    {
        $autorLivro = AutorLivro::create($request->all());

        return response()->json($autorLivro, 201);
    }

    public function update(Request $request, AutorLivro $autorLivro)
    {
        $livro->update($request->all());

        return response()->json($autorLivro, 200);
    }

    public function delete(Livro $autorLivro)
    {
        $autorLivro->delete();

        return response()->json(null, 204);
    }
}