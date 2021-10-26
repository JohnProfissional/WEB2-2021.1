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
       public function create(){
        return view('vendas.create');
}
    public function store(Request $request){
        $vendas = new Fornecedor ();
        $vendas->idvenda = $request->idvenda;
        $vendas->datavenda= $request->datavenda;
        $vendas->valortotal = $request->valortotal;
        $vendas->save();
        return redirect ('/vendas/indexvenda');
    }
}
