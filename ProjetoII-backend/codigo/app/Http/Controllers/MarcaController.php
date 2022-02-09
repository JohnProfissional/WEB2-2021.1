<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;

class MarcaController extends Controller
{
    //

    public function index(){
        $marcas = Marca::all();

        return view('marcas.index', ['marcas'=>$marcas]);
    }

    public function create(){
        return view('marcas.create');
    }

    public function store(Request $request){
        $marca = new Marca();
        $marca->nomedamarca = $request->nomedamarca;        
        $marca->save();
        return redirect()->route('marcas.index');

    }

    public function show($id){
        if($id){
            $marca = Marca::where('id',$id)->get();
        }else{
            $marca = Marca::all();
        }
        return view('marcas.show', ['marcas'=>$marca]); //passa objeto
    }

    public function edit($id){
        $marca = Marca::findorFail($id);
        return view('marcas.edit',['marca'=>$marca]);
    }

    public function update (Request $request){
        Marca::find($request->id)->update($request->except('_token'));
        return redirect()->route('marcas.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Marca::findorfail($id)->delete();
        return redirect()->route('marcas.index')->with('msg', 'Marca apagada');
    }

}
