<?php

namespace Modules\Pedido\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Session\SessionManager;
use Illuminate\Support\Facades\Session;
use Modules\Cliente\Entities\Cliente;
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
        $cliente = Cliente::where('email',$request->email)->first();
        if(!$cliente) {
            $cliente = new Cliente();
            $cliente->primeiro_nome = $request->primeiro_nome;
            $cliente->ultimo_nome = $request->ultimo_nome;
            $cliente->email = $request->email;
            $cliente->documento = $request->documento;
            $cliente->telefone = $request->telefone;
            $cliente->rua = $request->rua;
            $cliente->cidade = $request->cidade;
            $cliente->cep = $request->cep;
            $cliente->save();
        }
        $pedido = new Pedido();
        $pedido->cliente_id = $cliente->id;
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
        $request->session()->flash('msg', "Pedido {$pedido->id} realizado com sucesso");
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
