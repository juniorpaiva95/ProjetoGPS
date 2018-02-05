<?php

namespace Modules\Pedido\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Produto\Entities\Produto;

class Pedido extends Model
{
    protected $fillable = [
        'status'
    ];

    public function itens() {
        return $this->hasMany(PedidoItem::class);
    }
}
