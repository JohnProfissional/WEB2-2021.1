<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato_Cliente extends Model
{
    use HasFactory;
    protected $table = "contatos_clientes";

    protected $fillable = ['telefone', 'email', 'whatsapp', 'cliente_id'];
}
