<?php

namespace Modules\Produto\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Produto\Entities\Produto;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Produto::create([
            'nome' =>  'Produto 1',
            'descricao' => 'Descricao do Produto 1',
            'preco' => 123.00,
            'qtd_estq' => 15,
            'qtd_estq_min'=> 20
        ]);

        Produto::create([
            'nome' =>  'Produto 2',
            'descricao' => 'Descricao do Produto 2',
            'preco' => 2503.00,
            'qtd_estq' => 30,
            'qtd_estq_min'=> 12
        ]);
        Produto::create([
            'nome' =>  'Produto 3',
            'descricao' => 'Descricao do Produto 3',
            'preco' => 1123.00,
            'qtd_estq' => 105,
            'qtd_estq_min'=> 20
        ]);
    }
}
