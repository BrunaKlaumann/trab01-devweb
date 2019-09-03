<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosDaLivrariaController extends Controller
{
    public function index()
    {
        return UsuariosDaLivraria::all();
    }

    public function show(UsuariosDaLivraria $autorLivro)
    {
        return $usuario;
    }

    public function store(Request $request)
    {
        $usuario = UsuariosDaLivraria::create($request->all());

        return response()->json($usuario, 201);
    }

    public function update(Request $request, UsuariosDaLivraria $usuario)
    {
        $livro->update($request->all());

        return response()->json($usuario, 200);
    }

    public function delete(UsuariosDaLivraria $usuario)
    {
        $usuario->delete();

        return response()->json(null, 204);
    }
}