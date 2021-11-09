<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;
    //nome da tabela
    protected $table = "endereco";

    //colocar campos que serão setados no bd
    protected $fillable = ['logradouro', 'bairro', 'cidade', 'uf', 'cliente_id'];

    function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
        //o endereço pertence a...
    }

    
}
