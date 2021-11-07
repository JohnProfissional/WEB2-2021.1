<?php

namespace App\Http\Controllers;

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
    public function store(Request $request){
        $entradas = new Entrada ();
        $entradas->valortotaldanota = $request->valortotaldanota;
        $entradas->dataentrada = $request->dataentrada;        
        $entradas->save();
        return redirect ('/entradas/indexentrada');
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

    public function update (Request $request){
        Entrada::find($request->id)->update($request->except('_meethod'));
        return redirect('entradas/indexentrada')->with('msg', 'Cadastro realizado com sucesso');
    }
}
