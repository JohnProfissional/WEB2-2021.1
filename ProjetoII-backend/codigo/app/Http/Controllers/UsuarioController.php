<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    //

    public function index(){
        $usuarios = Usuario::all();

        return view('usuarios.index', ['usuarios'=>$usuarios]);
    }

    public function create(){
        return view('usuarios.create');
    }

    public function store(Request $request){
        $usuario = new Usuario();
        $usuario->nomeusuario = $request->nomeusuario;
        $usuario->login = $request->login;
        $usuario->senha = $request->senha;
        $usuario->cargo = $request->cargo;
        $usuario->adm = $request->adm;        
        $usuario->save();
        return redirect()->route('usuarios.index');

    }

    public function show($id){
        if($id){
            $usuario = Usuario::where('id',$id)->get();
        }else{
            $usuario = Usuario::all();
        }
        return view('usuarios.show', ['usuarios'=>$usuario]); //passa objeto
    }

    public function edit($id){
        $usuario = Usuario::findorFail($id);
        return view('usuarios.edit',['usuario'=>$usuario]);
    }

    public function update (Request $request){
        Usuario::find($request->id)->update($request->except('_token'));
        return redirect()->route('usuarios.index')->with('msg', 'Alteração realizada com sucesso');
    }

    public function destroy ($id){
        Usuario::findorfail($id)->delete();
        return redirect()->route('usuarios.index')->with('msg', 'Usuario apagado');
    }
}
