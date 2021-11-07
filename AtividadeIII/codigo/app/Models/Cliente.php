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
    
}
