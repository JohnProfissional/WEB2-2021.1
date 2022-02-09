<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //

    public function index(){
        $categorias = Categoria::all();

        return view('categorias.index', ['categorias'=>$categorias]);
    }

    public function create(){
        return view('categorias.create');
    }

    public function store(Request $request){
        $categoria = new Categoria();
        $categoria->nomecategoria = $request->nomecategoria;
        $categoria->save();
        return redirect()->route('categorias.index');
    }

    public function show($id){
        if($id){
            $categoria = Categoria::where('id',$id)->get();
        }else{
            $categoria = Categoria::all();
        }
        return view('categorias.show', ['categorias'=>$categoria]); //passa objeto
    }
    
    public function edit($id){
        $categoria = Categoria::findorFail($id);
        return view('categorias.edit',['categoria'=>$categoria]);
    }

    public function update (Request $request){
        Categoria::find($request->id)->update($request->except('_token'));
        return redirect()->route('categorias.index')->with('msg', 'Alteração realizada com sucesso');
    }
    
    public function destroy ($id){
        Categoria::findorfail($id)->delete();
        return redirect()->route('categorias.index')->with('msg', 'Categoria apagada');
    }

}
