<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensvenda;

class ItensvendaController extends Controller
{
    //
    public function indexitensvenda(){
        $itensvendas = Itensvenda::all();
            
        return view('itensvendas.indexitensvenda',['itensvendas'=>$itensvendas]); //passa objeto ->
    
       }   
       public function create(){
        return view('itensvendas.create');
}
       public function store(Request $request){
        $itensvenda = new Itensvenda();
        $itensvenda->quantidadeitens = $request->quantidadeitens;
        $itensvenda->valor = $request->valor;
        $itensvenda->desconto = $request->desconto;
        $itensvenda->save();
        return redirect ('/itensvenda/indexitensvenda');
    }

    public function show ($id){
        if($id){
            $itensvenda = Itensvenda::where('id',$id)->get();
        }else{
            $itensvenda = Itensvenda::all();
        }
        return view ('itensvendas.show', ['itensvendas'=>$itensvenda]); //passa objeto
    }
}
