<?php

namespace App\Http\Controllers;

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
       public function store(Request $request){
        $produto = new Produto ();        
        $produto->Nomeproduto = $request->nomeproduto;
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
}
