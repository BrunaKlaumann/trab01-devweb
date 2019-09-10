<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AutorLivro;

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

    public function update(Request $request, $id)
    {
        $autorLivro = AutorLivro::findOrFail($id);
        $autorLivro->update($request->all());

        return response()->json($autorLivro, 200);
    }

    public function delete(Request $request, $id)
    {
        $autorLivro = AutorLivro::findOrFail($id);
        $autorLivro->delete();

        return response()->json(null, 204);
    }
}