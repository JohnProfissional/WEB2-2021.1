<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forma_de_Pagamento;

class Forma_de_PagamentoController extends Controller
{
    //

    public function index(){
        $formasdepagamentos = Forma_de_Pagamento::all();

        return view('formasdepagamentos.index', ['formasdepagamentos'=>$formasdepagamentos]);
    }

    public function create(){
        return view('formasdepagamentos.create');
    }

    public function store(Request $request){
        $formadepagamento = new Forma_de_Pagamento();
        $formadepagamento->tipopagamento = $request->tipopagamento;
        $formadepagamento->numeroparcelas = $request->numeroparcelas;
        $formadepagamento->dataparcela = $request->dataparcela;
        $formadepagamento->venda_id = $request->venda_id;        
        $formadepagamento->save();
        return redirect()->route('formasdepagamentos.index');

    }

    public function show($id){
        if($id){
            $formadepagamento = Forma_de_Pagamento::where('id',$id)->get();
        }else{
            $formadepagamento = Forma_de_Pagamento::all();
        }
        return view('formasdepagamentos.show', ['formasdepagamentos'=>$formadepagamento]); //passa objeto
    }

    public function edit($id){
        $formadepagamento = Forma_de_Pagamento::findorFail($id);
        return view('formasdepagamentos.edit',['formadepagamento'=>$formadepagamento]);
    }

    public function update (Request $request){
        Forma_de_Pagamento::find($request->id)->update($request->except('_token'));
        return redirect()->route('formasdepagamentos.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Forma_de_Pagamento::findorfail($id)->delete();
        return redirect()->route('formasdepagamentos.index')->with('msg', 'Forma de pagamento apagada');
    }

}
