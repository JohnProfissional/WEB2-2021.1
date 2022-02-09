<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forma_de_Pagamento extends Model
{
    use HasFactory;
    protected $table = "formas_de_pagamentos";

    protected $fillable = ['tipopagamento', 'numeroparcelas', 'dataparcela', 'venda_id'];
}
