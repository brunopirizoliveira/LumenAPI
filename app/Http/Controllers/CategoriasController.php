<?php


namespace App\Http\Controllers;

use App\Categoria;
use http\Env\Response;
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
//            ->json(Categoria::create(['nome' => $request->nome]), 201);
            ->json(Categoria::create($request->all()), 201);
    }

    public function show(int $id)
    {
        $categoria = Categoria::find($id);
        if (is_null($categoria)) {
            return response()->json('', 204);
        }

        return response()->json($categoria, 201);
    }

    public function update(int $id, Request $request)
    {
        $categoria = Categoria::find($id);
        if(is_null($categoria)) {
            return response()->json(['erro' => 'Não encontrado'], 404);
        }
        $categoria->fill($request->all());
        $categoria->save();
        return response()->json($categoria, 201);
    }

    public function destroy(int $id)
    {
        $qtdRecursosRemovidos = Categoria::destroy($id);
        if($qtdRecursosRemovidos === 0) {
            return response()->json(['erro' => 'Recurso não encontrado'], 404);
        }
        return response()->json('', 204);
    }
}