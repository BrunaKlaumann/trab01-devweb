<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutorLivro extends Model
{
    protected $fillable = ['ID_AUTOR_FK', 'ID_LIVRO'];
}
