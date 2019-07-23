<?php


namespace App\Http\Controllers;


use App\Regra;

class RegrasController
{
    public function index()
    {
        return Regra::all();
    }
}