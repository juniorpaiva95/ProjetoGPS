<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Cliente\Http\Controllers'], function()
{
    Route::resource('cliente', 'ClienteController');
});
