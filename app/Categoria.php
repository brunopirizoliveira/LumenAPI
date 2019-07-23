<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class Categoriam extends Model
{
    public $timestamps = false;
    public $fillable = ['nome'];
}