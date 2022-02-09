<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato_Fornecedor;

class Contato_FornecedorController extends Controller
{
    //

    public function index(){
        $contatosfornecedores = Contato_Fornecedor::all();

        return view('contatosfornecedores.index', ['contatosfornecedores'=>$contatosfornecedoores]);
    }

    public function create(){
        return view('contatosfornecedores.create');
    }

    public function store(Request $request){
        $contatofornecedor = new Contato_Fornecedor();
        $contatofornecedor->telefonefornecedor = $request->telefonefornecedor;
        $contatofornecedor->whatsappfornecedor = $request->whatsappfornecedor;
        $contatofornecedor->emailfornecedor = $request->emailfornecedor;        
        $contatofornecedor->fornecedor_id = $request->fornecedor_id;        
        $contatofornecedor->save();
        return redirect()->route('contatosfornecedores.index');

    }

    public function show($id){
        if($id){
            $contatofornecedor = Contato_Fornecedor::where('id',$id)->get();
        }else{
            $contatofornecedor = Contato_Fornecedor::all();
        }
        return view('contatosfornecedores.show', ['contatosfornecedores'=>$contatofornecedor]); //passa objeto
    }

    public function edit($id){
        $contatofornecedor = Contato_Fornecedor::findorFail($id);
        return view('contatosfornecedores.edit',['contatofornecedor'=>$contatofornecedor]);
    }

    public function update (Request $request){
        Contato_Fornecedor::find($request->id)->update($request->except('_token'));
        return redirect()->route('contatosfornecedores.index')->with('msg', 'Alteração realizada com sucesso');
    }
    
    public function destroy ($id){
        Contato_Fornecedor::findorfail($id)->delete();
        return redirect()->route('contatosfornecedores.index')->with('msg', 'Contato do fornecedor apagado');
    }

}
