<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Regra extends Model
{
    public $timestamps = false;
    public $fillable = ['nome', 'descricao'];

    public function categorias() {
        $this->hasMany(Categoria::class);
    }
}