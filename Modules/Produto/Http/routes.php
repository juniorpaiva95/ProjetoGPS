<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Produto\Http\Controllers'], function()
{
    Route::resource('/produto', 'ProdutoController');
});
