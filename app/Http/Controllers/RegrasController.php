<?php


namespace App\Http\Controllers;

use App\Regra;

class RegrasController extends BaseController
{
    public function __construct()
    {
        $this->classe = Regra::class;
    }

    public function regrasPorCategoria(int $categoria_id)
    {
        return $this->classe::query()->where('categoria_id', $categoria_id)->get();
    }
}