<?php

namespace Modules\Cliente\Entities;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [];

    public function fullName() {
        return $this->primeiro_nome . " " . $this->ultimo_nome;
    }
}
