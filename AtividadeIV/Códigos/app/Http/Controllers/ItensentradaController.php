<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
    //
    public function indexitensentrada(){
        $itensentradas = Itensentrada::all();
            
        return view('itensentradas.indexitensentrada',['itensentradas'=>$itensentradas]); //passa objeto ->
    
       }   
       public function create(){
        return view('itensentradas.create');
}
       public function store(Request $request){
        $itensentrada = new Itensentrada ();
        $itensentrada->Identrada = $request->identrada;
        $itensentrada->precocompra = $request->precocompra;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->save();
        return redirect ('/itensentrada/indexitensentrada');
    }
}
