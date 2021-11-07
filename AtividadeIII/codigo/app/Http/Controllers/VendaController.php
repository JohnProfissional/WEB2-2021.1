<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    //
    public function indexvenda (){
        $vendas = Venda::all();
            
        return view('vendas.indexvenda',['vendas'=>$vendas]); //passa objeto ->
    
       }  
       public function create(){
        return view('vendas.create');
}
    public function store(Request $request){
        $venda = new Venda ();        
        $venda->datavenda= $request->datavenda;
        $venda->descontototal= $request->descontototal;
        $venda->descontoacerto= $request->descontoacerto;
        $venda->valortotal = $request->valortotal;
        $venda->save();
        return redirect ('/venda/indexvenda');
    }

    public function show ($id){
        if($id){
            $venda = Venda::where('id',$id)->get();
        }else{
            $venda = Venda::all();
        }
        return view ('vendas.show', ['vendas'=>$venda]); //passa objeto
    }
}
