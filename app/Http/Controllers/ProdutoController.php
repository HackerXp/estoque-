<?php

namespace Eleicao\Http\Controllers;

//use Eleicao\Produto;
use Illuminate\Http\Request;
use Eleicao\Models\Painel\Produto;
class ProdutoController extends Controller
{
    //
    public function index()
    {
        $produtos=Produto::all();
        return view('admin.painel', ['produtos'=>$produtos]);
    }

    public function create()
    {
        $valor="Teste do metodo create";
        return view('produto.create',compact('valor'));
    }

    public function edit()
    {
        $valor="Teste do metodo edit";
        return view('produto.edit',compact('valor'));
    }

    public function destroy()
    {
        return "Tet";
    }
}
