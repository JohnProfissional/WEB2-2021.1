<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco_Cliente;

class Endereco_ClienteController extends Controller
{
    //

    public function index(){
        $enderecosclientes = Endereco_Cliente::all();

        return view('enderecosclientes.index', ['enderecosclientes'=>$enderecosclientes]);
    }

    public function create(){
        return view('enderecosclientes.create');
    }

    public function store(Request $request){
        $enderecocliente = new Endereco_Cliente();
        $enderecocliente->rua = $request->rua;
        $enderecocliente->numero = $request->numero;
        $enderecocliente->bairro = $request->bairro;
        $enderecocliente->cidade = $request->cidade;
        $enderecocliente->uf = $request->uf;
        $enderecocliente->cep = $request->cep;
        $enderecocliente->cliente_id = $request->cliente_id;
        $enderecocliente->save();
        return redirect()->route('enderecosclientes.index');

    }

    public function show($id){
        if($id){
            $enderecocliente = Endereco_Cliente::where('id',$id)->get();
        }else{
            $enderecocliente = Endereco_Cliente::all();
        }
        return view('enderecosclientes.show', ['enderecosclientes'=>$enderecocliente]); //passa objeto
    }

    public function edit($id){
        $enderecocliente = Endereco_Cliente::findorFail($id);
        return view('enderecosclientes.edit',['enderecocliente'=>$enderecocliente]);
    }

    public function update (Request $request){
        Endereco_Cliente::find($request->id)->update($request->except('_token'));
        return redirect()->route('enderecosclientes.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Endereco_Cliente::findorfail($id)->delete();
        return redirect()->route('enderecosclientes.index')->with('msg', 'Endereco Cliente apagado');
    }

}
