<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prateleira;

class PrateleiraController extends Controller
{
    //

    public function index(){
        $prateleiras = Prateleira::all();

        return view('prateleiras.index', ['prateleiras'=>$prateleiras]);
    }

    public function create(){
        return view('prateleiras.create');
    }

    public function store(Request $request){
        $prateleira = new Prateleira();
        $prateleira->descricaoprateleira = $request->descricaoprateleira;
        $prateleira->quantidadedefrascos = $request->quantidadedefrascos;
        $prateleira->categoria_id = $request->categoria_id;                
        $prateleira->save();
        return redirect()->route('prateleiras.index');

    }

    public function show($id){
        if($id){
            $prateleira = Prateleira::where('id',$id)->get();
        }else{
            $prateleira = Prateleira::all();
        }
        return view('prateleiras.show', ['prateleiras'=>$prateleira]); //passa objeto
    }

    public function edit($id){
        $prateleira = Prateleira::findorFail($id);
        return view('prateleiras.edit',['prateleira'=>$prateleira]);
    }

    public function update (Request $request){
        Prateleira::find($request->id)->update($request->except('_token'));
        return redirect()->route('prateleiras.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Prateleira::findorfail($id)->delete();
        return redirect()->route('prateleiras.index')->with('msg', 'Prateleira apagada');
    }

}
