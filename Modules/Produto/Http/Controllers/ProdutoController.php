<?php

namespace Modules\Produto\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Produto\Entities\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('produto::product')->with(['produtos'=>$produtos]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
//        return view('vendor.pixit.ecommerce_product_view');
        return view('produto::product-create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->qtd_estq = $request->qtd_estq;
        $produto->qtd_estq_min = $request->qtd_estq_min;
        $produto->save();

        $request->session()->flash('msg', "Produto {$produto->nome} adicionado com sucesso");
        return $this->index();
    }


    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('produto::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('produto::edit');
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
