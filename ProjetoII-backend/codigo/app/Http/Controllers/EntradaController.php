<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entrada;

class EntradaController extends Controller
{
    //

    public function index(){
        $entradas = Entrada::all();

        return view('entradas.index', ['entradas'=>$entradas]);
    }

    public function create(){
        return view('entradas.create');
    }

    public function store(Request $request){
        $entrada = new Entrada();
        $entrada->valortotaldanota = $request->valortotaldanota;
        $entrada->dataentrada = $request->dataentrada;
        $entrada->fornecedor_id = $request->fornecedor_id;
        $entrada->usuario_id = $request->usuario_id;        
        $entrada->save();
        return redirect()->route('entradas.index');

    }

    public function show($id){
        if($id){
            $entrada = Entrada::where('id',$id)->get();
        }else{
            $entrada = Entrada::all();
        }
        return view('entradas.show', ['entradas'=>$entrada]); //passa objeto
    }

    public function edit($id){
        $entrada = Entrada::findorFail($id);
        return view('entradas.edit',['entrada'=>$entrada]);
    }

    public function update (Request $request){
        Entrada::find($request->id)->update($request->except('_token'));
        return redirect()->route('entradas.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Entrada::findorfail($id)->delete();
        return redirect()->route('entradas.index')->with('msg', 'Entrada apagada');
    }

}
