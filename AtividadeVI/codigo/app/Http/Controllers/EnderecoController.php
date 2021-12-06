<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnderecoRequest;
use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    //
    public function indexendereco(){
        $enderecos = Endereco::all();
            
        return view('enderecos.indexendereco',['enderecos'=>$enderecos]); //passa objeto ->
    
       }       
    
        public function create(){
            return view('enderecos.create');
    }
        public function store(StoreEnderecoRequest $request){

            $endereco = new Endereco ();
            $endereco->logradouro = $request->logradouro;
            $endereco->bairro = $request->bairro;
            $endereco->cidade = $request->cidade;
            $endereco->uf = $request->uf;
            $endereco->cliente_id = $request->cliente_id;
            $endereco->save();
            return redirect()->route('endereco.index');
        }
    
        public function show ($id){
            if($id){
                $endereco = Endereco::where('id',$id)->get();
            }else{
                $endereco = Endereco::all();
            }
            return view ('enderecos.show', ['enderecos'=>$endereco]); //passa objeto
        }
    
        public function edit ($id){
            $endereco = Endereco::findorFail($id);
            return view ('enderecos.edit', ['endereco'=>$endereco]);
        }
    
        public function update (StoreEnderecoRequest $request){
            Endereco::find($request->id)->update($request->except('_token'));
            return redirect()->route('endereco.index')->with('msg', 'Alteração realizada com sucesso');
        }
    
        public function destroy ($id){
            Endereco::findorfail($id)->delete();
            return redirect()->route('endereco.index')->with('msg', 'Endereco apagado');
        }
}
