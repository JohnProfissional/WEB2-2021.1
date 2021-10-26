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
        $itensvendas = new Itensvendas ();
        $itensvendas->Iditensvendas = $request->iditensvendas;
        $itensvendas->quantidadeitens = $request->quantidadeitens;
        $itensvendas->valor = $request->valor;
        $itensvendas->save();
        return redirect ('/itensvendas/indexitensvendas');
    }
}
