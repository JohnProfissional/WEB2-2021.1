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
            $Entrada = new Entrada ();
            $Entrada->Id entrada = $request->identrada;
            $Entrada->Valor total da nota = $request->Valortotaldanota;
            $Entrada->Data entrada = $request->dataentrada;
            $Entrada->save();
            return redirect ('/entrada/indexentrada');
        }
}
