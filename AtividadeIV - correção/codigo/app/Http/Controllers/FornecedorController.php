<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedorController extends Controller
{
     //
   public function indexs(){
    $fornecedores = Fornecedor::all();
        
    return view('fornecedores.indexs',['fornecedores'=>$fornecedores]); //passa objeto ->

   }   


    public function create(){
        return view('fornecedores.create');
}
    public function store(Request $request){
        $fornecedor = new Fornecedor ();
        $fornecedor->nomefornecedor = $request->nomefornecedor;
        $fornecedor->endereco = $request->endereco;
        $fornecedor->email = $request->email;
        $fornecedor->save();
        return redirect ('/fornecedores/indexs');
    }

    public function show ($id){
        if($id){
            $fornecedor = Fornecedor::where('id',$id)->get();
        }else{
            $fornecedor = Fornecedor::all();
        }
        return view ('fornecedores.show', ['fornecedores'=>$fornecedor]); //passa objeto
    }

    public function edit ($id){
        $fornecedor = Fornecedor::findorFail($id);
        return view ('fornecedores.edit', ['fornecedor'=>$fornecedor]);
    }

    public function update (Request $request){
        Fornecedor::find($request->id)->update($request->except('_token'));
        return redirect('fornecedores/indexs')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Fornecedor::findorfail($id)->delete();
        return redirect('fornecedores/indexs')->with('msg', 'Fornecedor apagado');
    }

    public function showentrada(){
        $fornecedores = Fornecedor::all();

        foreach($fornecedores as $fornecedor){
            echo "<p> Cliente: $fornecedor->nome </p>";
            echo "<p> Débito: $fornecedor->debito </p>";
            echo "<p> Endereço: $fornecedor->endereco </p>";

            $entradas = $fornecedor->entrada()->get();

            if(count($entradas)>0){
                echo "<h1>Entrada</h1>";
                foreach($entradas as $entrada){
                    echo "<p>[$entrada->id , $entrada->valortotaldanota, $entrada->dataentrada, $entrada->fornecedor_id]</p>";
                }
            }
            echo "<br>";
        }
    }
    
}
