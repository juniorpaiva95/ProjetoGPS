<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Pedido\Http\Controllers'], function()
{
    Route::resource('/pedido', 'PedidoController');
});
