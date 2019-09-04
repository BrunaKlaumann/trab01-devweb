<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AutorLivro extends Model
{
    protected $fillable = ['id_autor_fk', 'id_livro_fk'];
}
