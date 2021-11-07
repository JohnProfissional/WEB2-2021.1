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
        $itensentrada->precocompra = $request->precocompra;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->unidade = $request->unidade;
        $itensentrada->ipi = $request->ipi;
        $itensentrada->frete = $request->frete;
        $itensentrada->icms = $request->icms;
        $itensentrada->save();
        return redirect ('/itensentrada/indexitensentrada');
    }

    public function show ($id){
        if($id){
            $itensentrada = Itensentrada::where('id',$id)->get();
        }else{
            $itensentrada = Itensentrada::all();
        }
        return view ('itensentradas.show', ['itensentradas'=>$itensentrada]); //passa objeto
    }
}
