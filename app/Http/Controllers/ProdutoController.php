<?php

namespace Eleicao\Http\Controllers;

//use Eleicao\Produto;
use Eleicao\Http\Requests\ProdutoRequest;
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
        $valor="Novo produto";
        return view('produto.create',compact('valor'));
    }

    public function store(ProdutoRequest $request)
    {
        $input = $request->all();
        Produto::create($input);
        return redirect('produtos');
    }
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    public function destroy($id)
    {
        Produto::find($id)->delete();
        return redirect('produtos');
    }
}
