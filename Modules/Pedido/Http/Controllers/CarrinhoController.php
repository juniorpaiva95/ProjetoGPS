<?php

namespace Modules\Pedido\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class CarrinhoController extends Controller
{
    private $session;

    public function __construct(Request $request)
    {
        dd($request->hasSession());

        $this->session = $request->session();
        if (NULL === $this->session->get('carrinho')) {
            $this->session->put('carrinho', []);
        }
    }

    public function add() {
        dd($this->session);
    }

    public function remove() {

    }
}
