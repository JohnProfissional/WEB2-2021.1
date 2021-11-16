<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    protected $table = "entrada";

    protected $fillable = ['valortotaldanota', 'dataentrada', 'fornecedor_id'];

    function fornecedor(){
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id', 'id');
        //o endereço pertence a...
    }
    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'entrada_id', 'id');
    }
    
}
