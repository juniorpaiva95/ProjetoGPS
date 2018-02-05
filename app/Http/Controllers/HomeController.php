<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Pedido\Entities\Pedido;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedidos = Pedido::all();
        return view('vendor.pixit.ecommerce_dashboard')->with(['pedidos'=>$pedidos]);
    }
}
