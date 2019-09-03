<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locacoes extends Model
{
    protected $fillable = ['DATA_DEVOLUCAO', 'DATA_DEVOLVIDO', 'DATA_LOCACAO', 'ID_LIVRO', 'ID_LOCACAO', 'ID_USUARIO'];
}
