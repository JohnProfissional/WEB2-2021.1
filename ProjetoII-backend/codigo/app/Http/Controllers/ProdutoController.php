<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    //

    public function index(){
        $produtos = Produto::all();

        return view('produtos.index', ['produtos'=>$produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        $produto = new Produto();
        $produto->nomedoproduto = $request->nomedoproduto;
        $produto->icms = $request->icms;        
        $produto->ipi = $request->ipi;        
        $produto->frete = $request->frete;
        $produto->valornafabrica = $request->valornafabrica;
        $produto->valordecompra = $request->valordecompra;
        $produto->lucro = $request->lucro;        
        $produto->valorvenda = $request->valorvenda;        
        $produto->desconto = $request->desconto;
        $produto->quantidade = $request->quantidade;
        $produto->datavencimento = $request->datavencimento;
        $produto->marca_id = $request->marca_id;        
        $produto->categoria_id = $request->categoria_id;        
        $produto->save();
        return redirect()->route('produtos.index');

    }

    public function show($id){
        if($id){
            $produto = Produto::where('id',$id)->get();
        }else{
            $produto = Produto::all();
        }
        return view('produtos.show', ['produtos'=>$produto]); //passa objeto
    }

    public function edit($id){
        $produto = Produto::findorFail($id);
        return view('produtos.edit',['produto'=>$produto]);
    }

    public function update (Request $request){
        Produto::find($request->id)->update($request->except('_token'));
        return redirect()->route('produtos.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Produto::findorfail($id)->delete();
        return redirect()->route('produtos.index')->with('msg', 'Produto apagado');
    }
}
