<?php


namespace App\Http\Controllers;

use App\Categoria;

class CategoriasController extends BaseController
{
    public function __construct()
    {
        $this->classe = Categoria::class;
    }
}