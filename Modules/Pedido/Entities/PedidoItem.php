<?php

namespace Modules\Pedido\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Produto\Entities\Produto;

class PedidoItem extends Model
{
    protected $fillable = [];


    public function produto() {
        $this->belongsTo(Produto::class);
    }

    public function pedido()
    {
        $this->belongsTo(Pedido::class);
    }
}
