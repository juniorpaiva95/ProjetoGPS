<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidoItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pedido_id')->unsigned();
            $table->integer('produto_id')->unsigned();
            $table->foreign('pedido_id')
                ->references('id')->on('pedidos')
                ->onDelete('cascade');
            $table->foreign('produto_id')
                ->references('id')->on('produtos')
                ->onDelete('cascade');
            $table->integer('quantidade');
            $table->unsignedDecimal('preco_unit', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_items');
    }
}
