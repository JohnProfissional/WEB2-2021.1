<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Itensentrada;

class ItensentradaController extends Controller
{
    //
    public function indexitensentrada(){
        $itensentradas = Itensentrada::all();
            
        return view('itensentradas.indexitensentrada',['itensentradas'=>$itensentradas]); //passa objeto ->
    
       }   
}
