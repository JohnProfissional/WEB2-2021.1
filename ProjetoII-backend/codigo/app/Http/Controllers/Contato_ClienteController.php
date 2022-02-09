<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato_Cliente;

class Contato_ClienteController extends Controller
{
    //

    public function index(){
        $contatosclientes = Contato_Cliente::all();

        return view('contatosclientes.index', ['contatosclientes'=>$contatosclientes]);
    }

    public function create(){
        return view('contatosclientes.create');
    }

    public function store(Request $request){
        $contatocliente = new Contato_Cliente();
        $contatocliente->telefone = $request->telefone;
        $contatocliente->email = $request->email;
        $contatocliente->whatsapp = $request->whatsapp;
        $contatocliente->cliente_id = $request->cliente_id;        
        $contatocliente->save();
        return redirect()->route('contatosclientes.index');

    }

    public function show($id){
        if($id){
            $contatocliente = Contato_Cliente::where('id',$id)->get();
        }else{
            $contatocliente = Contato_Cliente::all();
        }
        return view('contatosclientes.show', ['contatosclientes'=>$contatocliente]); //passa objeto
    }

    public function edit($id){
        $contatocliente = Contato_Cliente::findorFail($id);
        return view('contatosclientes.edit',['contatocliente'=>$contatocliente]);
    }

    public function update (Request $request){
        Contato_Cliente::find($request->id)->update($request->except('_token'));
        return redirect()->route('contatosclientes.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Contato_Cliente::findorfail($id)->delete();
        return redirect()->route('contatosclientes.index')->with('msg', 'Contato do Cliente apagado');
    }
   
}
