<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreItensentradaRequest;
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
       public function store(StoreItensentradaRequest $request){
            
        $itensentrada = new Itensentrada ();        
        $itensentrada->precocompra = $request->precocompra;
        $itensentrada->quantidade = $request->quantidade;
        $itensentrada->unidade = $request->unidade;
        $itensentrada->ipi = $request->ipi;
        $itensentrada->frete = $request->frete;
        $itensentrada->icms = $request->icms;
        $itensentrada->entrada_id = $request->entrada_id;
        $itensentrada->produto_id = $request->produto_id;
        $itensentrada->save();
        return redirect()->route('itensentrada.indexitensentrada');
    }

    public function show ($id){
        if($id){
            $itensentrada = Itensentrada::where('id',$id)->get();
        }else{
            $itensentrada = Itensentrada::all();
        }
        return view ('itensentradas.show', ['itensentradas'=>$itensentrada]); //passa objeto
    }

    public function edit ($id){
        $itensentrada = Itensentrada::findorFail($id);
        return view ('itensentradas.edit', ['itensentrada'=>$itensentrada]);
    }

    public function update (StoreItensentradaRequest $request){
        Itensentrada::find($request->id)->update($request->except('_token'));
        return redirect()->route('itensentrada.indexitensentrada')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Itensentrada::findorfail($id)->delete();
        return redirect()->route('itensentrada.indexitensentrada')->with('msg', 'Itens entrada apagados');
    }
}
