<?php


namespace App\Http\Controllers;


use App\Regra;
use Illuminate\Http\Request;

class RegrasController
{
    public function index()
    {
        return Regra::all();
    }

    public function store(Request $request)
    {
        return response()
            ->json(Regra::create(['nome' => $request->nome, 'descricao' => $request->descricao]), 201);
    }
}