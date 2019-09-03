<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorController extends Controller
{
    public function index()
    {
        return Autor::all();
    }

    public function show(Autor $autor)
    {
        return $autor;
    }

    public function store(Request $request)
    {
        $autor = Autor::create($request->all());

        return response()->json($autor, 201);
    }

    public function update(Request $request, Autor $autor)
    {
        $autor->update($request->all());

        return response()->json($autor, 200);
    }

    public function delete(Autor $autor)
    {
        $autor->delete();

        return response()->json(null, 204);
    }
}