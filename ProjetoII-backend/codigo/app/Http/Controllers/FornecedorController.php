<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
    //

    public function index(){
        $fornecedores = Fornecedor::all();

        return view('fornecedores.index', ['fornecedores'=>$fornecedores]);
    }

    public function create(){
        return view('fornecedores.create');
    }

    public function store(Request $request){
        $fornecedor = new Fornecedor();
        $fornecedor->razaosocial = $request->razaosocial;
        $fornecedor->cnpj = $request->cnpj;
        $fornecedor->usuario_id = $request->usuario_id;        
        $fornecedor->save();
        return redirect()->route('fornecedores.index');

    }

    public function show($id){
        if($id){
            $fornecedor = Fornecedor::where('id',$id)->get();
        }else{
            $fornecedor = Fornecedor::all();
        }
        return view('fornecedores.show', ['fornecedores'=>$fornecedor]); //passa objeto
    }

    public function edit($id){
        $fornecedor = Fornecedor::findorFail($id);
        return view('fornecedores.edit',['fornecedor'=>$fornecedor]);
    }

    public function update (Request $request){
        Fornecedor::find($request->id)->update($request->except('_token'));
        return redirect()->route('fornecedores.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Fornecedor::findorfail($id)->delete();
        return redirect()->route('fornecedores.index')->with('msg', 'Fornecedor apagado');
    }

}
