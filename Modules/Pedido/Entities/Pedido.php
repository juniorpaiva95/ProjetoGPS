<?php

namespace Modules\Pedido\Entities;

use Carbon\Carbon;
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

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y H:i:s');
    }

    public function getUpdatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d/m/Y H:i:s');
    }

    public function totalItens() {
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->quantidade;
        }
        return $total;
    }
    public function totalPreco() {
        $total = 0;
        foreach($this->itens as $item){
            $total += $item->preco_unit;
        }
        return number_format($total, 2, ',','.');
    }

    public function getStatusHTML() {
        switch ($this->status){
            case 'waiting-payment':
                return "<span class='label label-primary w-300'>$this->status</span>";
                break;
            case 'payment-received':
                return "<span class='label label-success w-300'>$this->status</span>";
                break;
            case 'payment-canceled':
                return "<span class='label label-danger w-300'>$this->status</span>";
                break;
        }
    }
}
