<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devolucao;

class DevolucaoController extends Controller
{
    //

    public function index(){
        $devolucoes = Devolucao::all();

        return view('devolucoes.index', ['devolucoes'=>$devolucoes]);
    }

    public function create(){
        return view('devolucoes.create');
    }

    public function store(Request $request){
        $devolucao = new Devolucao();
        $devolucao->datadevolucao = $request->datadevolucao;
        $devolucao->descricaodadevolucao = $request->descricaodadevolucao;
        $devolucao->quantidadedevolvida = $request->quantidadedevolvida;
        $devolucao->itensvendas_id = $request->itensvendas_id;        
        $devolucao->save();
        return redirect()->route('devolucoes.index');

    }

    public function show($id){
        if($id){
            $devolucao = Devolucao::where('id',$id)->get();
        }else{
            $devolucao = Devolucao::all();
        }
        return view('devolucoes.show', ['devolucoes'=>$devolucao]); //passa objeto
    }

    public function edit($id){
        $devolucao = Devolucao::findorFail($id);
        return view('devolucoes.edit',['devolucao'=>$devolucao]);
    }

    public function update (Request $request){
        Devolucao::find($request->id)->update($request->except('_token'));
        return redirect()->route('devolucoes.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Devolucao::findorfail($id)->delete();
        return redirect()->route('devolucoes.index')->with('msg', 'Devolucao apagada');
    }

}
