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
        $produtos = new Produtos ();
        $produtos->Idproduto = $request->idproduto;
        $produtos->Nomeproduto = $request->nomeproduto;
        $produtos->quantidade = $request->quantidade;
        $produtos->datavencimento = $request->datavencimento;
        $produtos->save();
        return redirect ('/produtos/indexprodutos');
    }
}
