<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livros extends Model
{
    protected $fillable = ['id_livro', 'titulo'];
}
