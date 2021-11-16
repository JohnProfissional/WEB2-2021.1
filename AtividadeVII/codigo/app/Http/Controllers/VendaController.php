<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendaRequest; 
use Illuminate\Http\Request;
use App\Models\Venda;

class VendaController extends Controller
{
    //
    public function indexvenda (){
        $vendas = Venda::all();
            
        return view('vendas.indexvenda',['vendas'=>$vendas]); //passa objeto ->
    
       }  
       public function create(){
        return view('vendas.create');
}
    public function store(StoreVendaRequest $request){
        
        $venda = new Venda ();        
        $venda->datavenda= $request->datavenda;
        $venda->descontototal= $request->descontototal;
        $venda->descontoacerto= $request->descontoacerto;
        $venda->valortotal = $request->valortotal;
        $venda->cliente_id = $request->cliente_id;
        $venda->save();
        return redirect ('/venda/indexvenda');
    }

    public function show ($id){
        if($id){
            $venda = Venda::where('id',$id)->get();
        }else{
            $venda = Venda::all();
        }
        return view ('vendas.show', ['vendas'=>$venda]); //passa objeto
    }

    public function edit ($id){
        $venda = Venda::findorFail($id);
        return view ('vendas.edit', ['venda'=>$venda]);
    }

    public function update (Request $request){
        Venda::find($request->id)->update($request->except('_token'));
        return redirect('venda/indexvenda')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Venda::findorfail($id)->delete();
        return redirect('venda/indexvenda')->with('msg', 'Venda apagada');
    }

    public function showitensvenda(){
        $vendas = Venda::all();

        foreach($vendas as $venda){
            echo "<p> ID Cliente: $venda->cliente_id </p>";
            echo "<p> Data da venda: $venda->datavenda </p>";
            echo "<p> Desconto total: $venda->descontototal </p>";
            echo "<p> Desconto acerto: $venda->descontoacerto </p>";
            echo "<p> Valor total: $venda->valortotal </p>";

            $itensvendas = $venda->itensvenda()->get();

            if(count($itensvendas)>0){
                echo "<h1>Venda</h1>";
                foreach($itensvendas as $itensvenda){
                    echo "<p>[$itensvenda->id , $itensvenda->quantidadeitens, $itensvenda->valor, $itensvenda->desconto]</p>";
                }
            }
            echo "<br>";
        }
    }
}
