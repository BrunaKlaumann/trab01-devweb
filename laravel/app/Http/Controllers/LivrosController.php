<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livros as Livro;

class LivroController extends Controller
{
    public function index()
    {
        return Livro::all();
    }

    public function show(Livro $livro)
    {
        return $livro;
    }

    public function store(Request $request)
    {
        $livro = Livro::create($request->all());

        return response()->json($livro, 201);
    }

    public function update(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->update($request->all());

        return response()->json($livro, 200);
    }

    public function delete(Request $request, $id)
    {
        $livro = Livro::findOrFail($id);
        $livro->delete();

        return response()->json(null, 204);
    }
}