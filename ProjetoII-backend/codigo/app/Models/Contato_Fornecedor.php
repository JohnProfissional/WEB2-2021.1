<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato_Fornecedor extends Model
{
    use HasFactory;
    protected $table = "contatos_fornecedores";

    protected $fillable = ['telefonefornecedor', 'whatsappfornecedor', 'emailfornecedor', 'fornecedor_id'];
}
