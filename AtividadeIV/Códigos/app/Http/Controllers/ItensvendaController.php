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
}
