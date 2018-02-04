<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Pedido\Http\Controllers'], function()
{
    Route::resource('/pedido', 'PedidoController');
//    Route::get('/add-carrinho/{produto}', 'CarrinhoController@add')->name('carrinho.add');
});


Route::group(['middleware' => ['web'], 'prefix' => '', 'namespace' => 'Modules\Pedido\Http\Controllers'], function()
{
    Route::get('/carrinho', 'CarrinhoController@index')->name('carrinho.index');
    Route::get('/carrinho/{produto}', 'CarrinhoController@add')->name('carrinho.add');
    Route::delete('/carrinho/{produto}', 'CarrinhoController@remove')->name('carrinho.delete');
});
