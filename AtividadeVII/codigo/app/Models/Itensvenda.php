<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itensvenda extends Model
{
    use HasFactory;
    protected $table = "itensvenda";

    protected $fillable = ['quantidadeitens', 'valor', 'desconto', 'venda_id', 'produto_id'];

    function venda(){
        return $this->belongsTo(Venda::class, 'venda_id', 'id');
        //o endereço pertence a...
    }

    function produto(){
        return $this->belongsTo(Produto::class, 'produto_id', 'id');
        //o endereço pertence a...
    }
}
