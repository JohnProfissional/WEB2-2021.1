<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    //nome da tabela
    protected $table = "clientes";

    //colocar campos que serão setados no bd
    protected $fillable = ['nome', 'endereco', 'debito'];

    function endereco(){
        return $this->hasMany(Endereco::class, 'cliente_id', 'id');
    }

    function venda(){
        return $this->hasMany(Venda::class, 'cliente_id', 'id');
    }
    
}
