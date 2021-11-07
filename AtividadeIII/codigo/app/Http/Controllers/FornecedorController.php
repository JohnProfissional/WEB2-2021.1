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
        $fornecedor->nome = $request->nome;
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
    
}
