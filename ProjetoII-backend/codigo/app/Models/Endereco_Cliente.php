<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco_Cliente extends Model
{
    use HasFactory;
    protected $table = "enderecos_clientes";

    protected $fillable = ['rua', 'numero', 'bairro', 'cidade', 'uf', 'cep', 'cliente_id'];
}
