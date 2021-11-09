<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itensentrada extends Model
{
    use HasFactory;
    protected $table = "itensentrada";

    protected $fillable = ['precocompra', 'quantidade', 'unidade', 'ipi', 'frete', 'icms', 'entrada_id', 'produto_id'];
    
    function entrada(){
        return $this->belongsTo(Entrada::class, 'entrada_id', 'id');
        //o endereço pertence a...
    }
    function produto(){
        return $this->belongsTo(Produto::class, 'produto_id', 'id');
        //o endereço pertence a...
    }
}
