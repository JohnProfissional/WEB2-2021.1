<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //

    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $cliente = new Cliente();
        $cliente->nomecliente = $request->nomecliente;
        $cliente->cpfcliente = $request->cpfcliente;
        $cliente->rgcliente = $request->rgcliente;
        $cliente->sexocliente = $request->sexocliente;
        $cliente->datanascimento = $request->datanascimento;
        $cliente->debito = $request->debito;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    public function show($id){
        if($id){
            $cliente = Cliente::where('id',$id)->get();
        }else{
            $cliente = Cliente::all();
        }
        return view('clientes.show', ['clientes'=>$cliente]); //passa objeto
    }

    public function edit($id){
        $cliente = Cliente::findorFail($id);
        return view('clientes.edit',['cliente'=>$cliente]);
    }

    public function update (Request $request){
        Cliente::find($request->id)->update($request->except('_token'));
        return redirect()->route('clientes.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Cliente::findorfail($id)->delete();
        return redirect()->route('clientes.index')->with('msg', 'Cliente apagado');
    }

}
