<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensvenda;

class ItensvendaController extends Controller
{
    //
    public function indexitensvenda(){
        $itensvendas = Itensvenda::all();
            
        return view('itensvendas.indexitensvenda',['itensvendas'=>$itensvendas]); //passa objeto ->
    
       }   
       public function create(){
        return view('itensvendas.create');
}
       public function store(Request $request){
        $itensvenda = new Itensvenda();
        $itensvenda->quantidadeitens = $request->quantidadeitens;
        $itensvenda->valor = $request->valor;
        $itensvenda->desconto = $request->desconto;
        $itensvenda->venda_id = $request->venda_id;
        $itensvenda->produto_id = $request->produto_id;

        $itensvenda->save();
        return redirect ('/itensvenda/indexitensvenda');
    }

    public function show ($id){
        if($id){
            $itensvenda = Itensvenda::where('id',$id)->get();
        }else{
            $itensvenda = Itensvenda::all();
        }
        return view ('itensvendas.show', ['itensvendas'=>$itensvenda]); //passa objeto
    }

    public function edit ($id){
        $itensvenda = Itensvenda::findorFail($id);
        return view ('itensvendas.edit', ['itensvenda'=>$itensvenda]);
    }

    public function update (Request $request){
        Itensvenda::find($request->id)->update($request->except('_token'));
        return redirect('itensvenda/indexitensvenda')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Itensvenda::findorfail($id)->delete();
        return redirect('itensvenda/indexitensvenda')->with('msg', 'Itens venda apagados');
    }
}
