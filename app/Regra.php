<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Regra extends Model
{
    public $timestamps = false;
    public $fillable = ['nome', 'descricao', 'categoria_id'];

    public function categoria() {
        $this->belongsTo(Categoria::class);
    }

    public function getCategoriaIdAttribute($categoria_id)
    {
        return (integer) $categoria_id;
    }

}