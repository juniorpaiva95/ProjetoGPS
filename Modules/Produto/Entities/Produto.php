<?php

namespace Modules\Produto\Entities;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'qtd_estq',
        'qtd_estq_min',
        'preco'
    ];
}
