<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    //
    public function indexproduto(){
        $produtos = Produto::all();
            
        return view('produtos.indexproduto',['produtos'=>$produtos]); //passa objeto ->
    
       }   
       public function create(){
        return view('produtos.create');
}
       public function store(StoreProdutoRequest $request){

        $produto = new Produto ();        
        $produto->nomeproduto = $request->nomeproduto;
        $produto->quantidade = $request->quantidade;
        $produto->datavencimento = $request->datavencimento;
        $produto->save();
        return redirect ('/produtos/indexproduto');
    }

    public function show ($id){
        if($id){
            $produto = Produto::where('id',$id)->get();
        }else{
            $produto = Produto::all();
        }
        return view ('produtos.show', ['produtos'=>$produto]); //passa objeto
    }
    public function edit ($id){
        $produto = Produto::findorFail($id);
        return view ('produtos.edit', ['produto'=>$produto]);
    }

    public function update (Request $request){
        Produto::find($request->id)->update($request->except('_token'));
        return redirect('produtos/indexproduto')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Produto::findorfail($id)->delete();
        return redirect('produtos/indexproduto')->with('msg', 'Produto apagado');
    }

    public function showitensvenda(){
        $produtos = Produto::all();

        foreach($produtos as $produto){
            echo "<p> Nome do produto: $produto->nomeproduto </p>";
            echo "<p> Quantidade: $produto->quantidade </p>";
            echo "<p> Data de vencimento: $produto->datavencimento </p>";
            
            $itensvendas = $produto->itensvenda()->get();

            if(count($itensvendas)>0){
                echo "<h1>Venda</h1>";
                foreach($itensvendas as $itensvenda){
                    echo "<p>[$itensvenda->id , $itensvenda->quantidadeitens, $itensvenda->valor, $itensvenda->desconto]</p>";
                }
            }
            echo "<br>";
        }
    }
    public function showitensentrada(){
        $produtos = Produto::all();

        foreach($produtos as $produto){
            echo "<p> Nome do produto: $produto->nomeproduto</p>";
            echo "<p> Quantidade: $produto->quantidade </p>";
            echo "<p> Data de vencimento: $produto->datavencimento </p>";
            

            $itensentradas = $produto->itensentrada()->get();

            if(count($itensentradas)>0){
                echo "<h1>Itens entrada</h1>";
                foreach($itensentradas as $itensentrada){
                    echo "<p>[$itensentrada->id , $itensentrada->precocompra, $itensentrada->quantidade, $itensentrada->unidade, $itensentrada->ipi, $itensentrada->frete, $itensentrada->icms]</p>";
                }
            }
            echo "<br>";
        }
    }
}

