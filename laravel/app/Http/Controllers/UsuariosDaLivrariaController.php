<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsuariosDaLivraria;

class UsuariosDaLivrariaController extends Controller
{
    public function index()
    {
        return UsuariosDaLivraria::all();
    }

    public function show(UsuariosDaLivraria $usuario)
    {
        return $usuario;
    }

    public function store(Request $request)
    {
        $usuario = UsuariosDaLivraria::create($request->all());

        return response()->json($usuario, 201);
    }

    public function update(Request $request, $id)
    {
        $usuario = UsuariosDaLivraria::findOrFail($id);
        $usuario->update($request->all());

        return response()->json($usuario, 200);
    }

    public function delete(Request $request, $id)
    {
        $usuario = UsuariosDaLivraria::findOrFail($id);
        $usuario->delete();

        return response()->json(null, 204);
    }
}