<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClienteRequest;
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
    public function store(StoreClienteRequest $request){

        //dd($request->all());

        $cliente = new Cliente ();
        $cliente->nome = $request->nome;
        $cliente->endereco = $request->endereco;
        $cliente->debito = $request->debito;
        $cliente->save();
        return redirect ('/clientes/index');
        //return redirect()->route('clientes.index');
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
        return redirect('clientes/index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Cliente::findorfail($id)->delete();
        return redirect('clientes/index')->with('msg', 'Cliente apagado');
    }

    public function showendereco(){
        $clientes = Cliente::all();

        foreach($clientes as $cliente){
            echo "<p> Cliente: $cliente->nome </p>";
            echo "<p> Débito: $cliente->debito </p>";

            $enderecos = $cliente->endereco()->get();

            if(count($enderecos)>0){
                echo "<h1>Endereço</h1>";
                foreach($enderecos as $endereco){
                    echo "<p>[$endereco->id , $endereco->logradouro, $endereco->bairro, $endereco->cidade, $endereco->uf]</p>";
                }
            }
            echo "<br>";
        }
    }

    public function showvenda(){
        $clientes = Cliente::all();

        foreach($clientes as $cliente){
            echo "<p> Cliente: $cliente->nome </p>";
            echo "<p> Débito: $cliente->debito </p>";
            echo "<p> Endereço: $cliente->endereco </p>";

            $vendas = $cliente->venda()->get();

            if(count($vendas)>0){
                echo "<h1>Venda</h1>";
                foreach($vendas as $venda){
                    echo "<p>[$venda->id , $venda->datavenda, $venda->descontototal, $venda->descontoacerto, $venda->valortotal]</p>";
                }
            }
            echo "<br>";
        }
    }
}