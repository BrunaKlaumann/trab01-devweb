<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Autores as Autor;

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

    public function update(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);
        $autor->update($request->all());

        return response()->json($autor, 200);
    }

    public function delete(Request $request, $id)
    {
        $autor = Autor::findOrFail($id);
        $autor->delete();

        return response()->json(null, 204);
    }
}