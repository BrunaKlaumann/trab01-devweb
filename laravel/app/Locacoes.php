<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacoes extends Model
{
    protected $fillable = ['data_devolucao', 'data_devolvido', 'data_locacao', 'id_livro', 'id_locacao', 'id_usuario'];
}
