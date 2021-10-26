<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    //
    public function indexproduto(){
        $vendas = Venda::all();
            
        return view('vendas.indexvenda',['vendas'=>$vendas]); //passa objeto ->
    
       }  
}
