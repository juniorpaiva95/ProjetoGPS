<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return redirect('login');
    $produtos = \Modules\Produto\Entities\Produto::all();
    return view('welcome',compact('produtos'));
//    return view('vendor.pixit.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
