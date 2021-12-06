<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;
    protected $table = "vendas";

    protected $fillable = ['datavenda', 'descontototal', 'descontoacerto', 'valortotal', 'cliente_id'];
    
    function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
        //o endereço pertence a...
    }

    function itensvenda(){
        return $this->hasMany(Itensvenda::class, 'venda_id', 'id');
    }

}
