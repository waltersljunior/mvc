<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    //
    protected $fillable = ['id', 'nome', 'desc'];
    protected $table = 'cliente';
}
