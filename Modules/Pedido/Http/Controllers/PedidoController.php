<?php

namespace Modules\Pedido\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Pedido\Entities\Pedido;
use Modules\Pedido\Entities\PedidoItem;
use Modules\Produto\Entities\Produto;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('pedido::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('pedido::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $pedido = new Pedido();
        $pedido->status = 'waiting-payment';
        $pedido->save();
        foreach(Cart::instance('default')->content() as $item){
            $pi = new PedidoItem();
            $pi->produto_id = $item->id;
            $pi->quantidade = $item->qty;
            $pi->pedido_id = $pedido->id;
            $pi->preco_unit = $item->price;
            $pi->save();
        }
        Cart::destroy();
        return redirect('/home');


    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('pedido::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('pedido::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
