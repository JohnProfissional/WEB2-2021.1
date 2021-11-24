<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEntradaRequest;
use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    //
    public function indexentrada(){
        $entradas = Entrada::all();
            
        return view('entradas.indexentrada',['entradas'=>$entradas]); //passa objeto ->
    
       }   
    
    
        public function create(){
            return view('entradas.create');
    }
    public function store(StoreEntradaRequest $request){
        
        $entrada = new Entrada ();
        $entrada->valortotaldanota = $request->valortotaldanota;
        $entrada->dataentrada = $request->dataentrada; 
        $entrada->fornecedor_id = $request->fornecedor_id;       
        $entrada->save();
        return redirect()->route('entrada.indexentrada');
    }

    public function show ($id){
        if($id){
            $entrada = Entrada::where('id',$id)->get();
        }else{
            $entrada = Entrada::all();
        }
        return view ('entradas.show', ['entradas'=>$entrada]); //passa objeto
    }

    public function edit ($id){
        $entrada = Entrada::findorFail($id);
        return view ('entradas.edit', ['entrada'=>$entrada]);
    }

    public function update (StoreEntradaRequest $request){
        Entrada::find($request->id)->update($request->except('_token'));
        return redirect()->route('entrada.indexentrada')->with('msg', 'Alteração realizada com sucesso');
    }
    
    public function destroy ($id){
        Entrada::findorfail($id)->delete();
        return redirect()->route('entrada.indexentrada')->with('msg', 'Entrada apagada');
    }

    public function showitensentrada(){
        $entradas = Entrada::all();

        foreach($entradas as $entrada){
            echo "<p> Valor total da nota: $entrada->valortotaldanota </p>";
            echo "<p> Data da entrada: $entrada->dataentrada </p>";
            

            $itensentradas = $entrada->itensentrada()->get();

            if(count($itensentradas)>0){
                echo "<h1>Itens entrada</h1>";
                foreach($itensentradas as $itensentrada){
                    echo "<p>[$itensentrada->id , $itensentrada->precocompra, $itensentrada->quantidade, $itensentrada->unidade, $itensentrada->ipi, $itensentrada->frete, $itensentrada->icms]</p>";
                }
            }
            echo "<br>";
        }
    }
}
