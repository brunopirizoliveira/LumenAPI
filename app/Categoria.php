<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    public $fillable = ['nome'];

    public function regras()
    {
        return $this->hasMany(Regra::class);
    }
}