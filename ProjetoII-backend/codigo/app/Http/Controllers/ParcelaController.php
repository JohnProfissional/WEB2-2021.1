<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parcela;

class ParcelaController extends Controller
{
    //

    public function index(){
        $parcelas = Parcela::all();

        return view('parcelas.index', ['parcelas'=>$parcelas]);
    }

    public function create(){
        return view('parcelas.create');
    }

    public function store(Request $request){
        $parcela = new Parcela();
        $parcela->numerodeparcelas = $request->numerodeparcelas;
        $parcela->valorparcela = $request->valorparcela;
        $parcela->status = $request->status;        
        $parcela->vencimento = $request->vencimento;
        $parcela->valortotaldaparcela = $request->valortotaldaparcela;
        $parcela->forma_de_pagamento_id = $request->forma_de_pagamento_id;        
        $parcela->pagamento_id = $request->pagamento_id;        
        $parcela->save();
        return redirect()->route('parcelas.index');

    }

    public function show($id){
        if($id){
            $parcela = Parcela::where('id',$id)->get();
        }else{
            $parcela = Parcela::all();
        }
        return view('parcelas.show', ['parcelas'=>$parcela]); //passa objeto
    }

    public function edit($id){
        $parcela = Parcela::findorFail($id);
        return view('parcelas.edit',['parcela'=>$parcela]);
    }

    public function update (Request $request){
        Parcela::find($request->id)->update($request->except('_token'));
        return redirect()->route('parcelas.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Parcela::findorfail($id)->delete();
        return redirect()->route('parcelas.index')->with('msg', 'Parcela apagada');
    }

}
