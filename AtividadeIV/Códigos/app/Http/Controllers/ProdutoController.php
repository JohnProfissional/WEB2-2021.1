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
}
