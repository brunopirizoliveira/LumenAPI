<?php


namespace App\Http\Controllers;

use App\Regra;

class RegrasController extends BaseController
{
    public function __construct()
    {
        $this->classe = Regra::class;
    }
}