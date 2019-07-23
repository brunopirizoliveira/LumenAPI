<?php


namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController
{
    public function index()
    {
        return Categoria::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(Categoria::create(['nome' => $request->nome]), 201);
    }

    public function get(int $id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json('', 204);
        }

        return response()->json($categoria, 201);
    }
}