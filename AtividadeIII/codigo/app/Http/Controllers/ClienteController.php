<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
   public function index(){
    $clientes = Cliente::all();
        
    return view('clientes.index',['clientes'=>$clientes]); //passa objeto ->

   }   


    public function create(){
        return view('clientes.create');
}
    public function store(Request $request){
        $cliente = new Cliente ();
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->debito = $request->debito;
        $cliente->save();
        return redirect ('/clientes/index');
    }

    public function show ($id){
        if($id){
            $cliente = Cliente::where('id',$id)->get();
        }else{
            $cliente = Cliente::all();
        }
        return view ('clientes.show', ['clientes'=>$cliente]); //passa objeto
    }

    public function edit ($id){
        $cliente = Cliente::findorFail($id);
        return view ('clientes.edit', ['cliente'=>$cliente]);
    }

    public function update (Request $request){
        Cliente::find($request->id)->update($request->except('_token'));
        return redirect('clientes/index')->with('msg', 'Cadastro realizado com sucesso');
    }
}