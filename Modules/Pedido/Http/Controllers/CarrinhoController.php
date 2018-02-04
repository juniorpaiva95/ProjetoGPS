<?php

namespace Modules\Pedido\Http\Controllers;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Produto\Entities\Produto;

class CarrinhoController extends Controller
{
    protected $oldCart;

//    public function __construct()
//    {
//        $this->middleware(function ($request, $next) {
//            $this->oldCart = Session::has('cart') ? Session::get('cart') : null;
//            dd(Session::get('cart'));
//            return $next($request);
//        });
//    }
    public function index() {
        return view("carrinho.carrinho")->with(
            [
                'items'=>Cart::instance('default')->content(),
                'total' => Cart::subtotal()
            ]
        );
    }

    public function add(Request $request, Produto $produto)
    {
        Cart::add($produto->id, $produto->nome, 1, $produto->preco);
        return redirect()->route('carrinho.index');
    }

    public function remove($rowId) {
        Cart::remove($rowId);
        return redirect()->route('carrinho.index');
    }
}
