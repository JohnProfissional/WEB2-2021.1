<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcela extends Model
{
    use HasFactory;
    protected $table = "parcelas";

    protected $fillable = ['numerodeparcelas', 'valorparcela', 'status', 'vencimento', 'valortotaldaparcela', 'forma_de_pagamento_id', 'pagamento_id'];
}
