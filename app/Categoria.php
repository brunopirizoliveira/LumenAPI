<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    public $fillable = ['nome'];
    public $appends = ['links'];

    public function regras()
    {
        return $this->hasMany(Regra::class);
    }

    public function getLinksAttribute($links): array
    {
        return [
            'regras' => 'api/categorias/' . $this->id . '/regras'
        ];
    }
}