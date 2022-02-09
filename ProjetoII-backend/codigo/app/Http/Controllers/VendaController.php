<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    //

    public function index(){
        $vendas = Venda::all();

        return view('vendas.index', ['vendas'=>$vendas]);
    }

    public function create(){
        return view('vendas.create');
    }

    public function store(Request $request){
        $venda = new Venda();
        $venda->datavenda = $request->datavenda;
        $venda->descontototal = $request->descontototal;
        $venda->descontoacerto = $request->descontoacerto;
        $venda->valortotal = $request->valortotal;        
        $venda->usuario_id = $request->usuario_id;        
        $venda->cliente_id = $request->cliente_id;
        $venda->save();
        return redirect()->route('vendas.index');

    }

    public function show($id){
        if($id){
            $venda = Venda::where('id',$id)->get();
        }else{
            $venda = Venda::all();
        }
        return view('vendas.show', ['vendas'=>$venda]); //passa objeto
    }

    public function edit($id){
        $venda = Venda::findorFail($id);
        return view('vendas.edit',['venda'=>$venda]);
    }

    public function update (Request $request){
        Venda::find($request->id)->update($request->except('_token'));
        return redirect()->route('vendas.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Venda::findorfail($id)->delete();
        return redirect()->route('vendas.index')->with('msg', 'Venda apagada');
    }
}
