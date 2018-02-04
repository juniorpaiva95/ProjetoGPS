<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Pedido\Http\Controllers'], function()
{
    Route::resource('/pedido', 'PedidoController');
//    Route::get('/add-carrinho/{produto}', 'CarrinhoController@add')->name('carrinho.add');
});


Route::group(['middleware' => ['web','guest'], 'prefix' => '', 'namespace' => 'Modules\Pedido\Http\Controllers'], function()
{
    Route::get('/add-carrinho/{produto}', 'CarrinhoController@add')->name('carrinho.add');
});
