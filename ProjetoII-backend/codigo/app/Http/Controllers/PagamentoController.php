<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pagamento;

class PagamentoController extends Controller
{
    //

    public function index(){
        $pagamentos = Pagamento::all();

        return view('pagamentos.index', ['pagamentos'=>$pagamentos]);
    }

    public function create(){
        return view('pagamentos.create');
    }

    public function store(Request $request){
        $pagamento = new Pagamento();
        $pagamento->valorpagamento = $request->valorpagamento;
        $pagamento->datapagamento = $request->datapagamento;
        $pagamento->numerosdeparcelas = $request->numerosdeparcelas;        
        $pagamento->save();
        return redirect()->route('pagamentos.index');

    }

    public function show($id){
        if($id){
            $pagamento = Pagamento::where('id',$id)->get();
        }else{
            $pagamento = Pagamento::all();
        }
        return view('pagamentos.show', ['pagamentos'=>$pagamento]); //passa objeto
    }

    public function edit($id){
        $pagamento = Pagamento::findorFail($id);
        return view('pagamentos.edit',['pagamento'=>$pagamento]);
    }

    public function update (Request $request){
        Pagamento::find($request->id)->update($request->except('_token'));
        return redirect()->route('pagamentos.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Pagamento::findorfail($id)->delete();
        return redirect()->route('pagamentos.index')->with('msg', 'Pagamento apagado');
    }

}
