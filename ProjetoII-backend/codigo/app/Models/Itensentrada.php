<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itensentrada extends Model
{
    use HasFactory;
    protected $table = "itensentradas";

    protected $fillable = ['precocompra', 'quantidadeentrada', 'unidade', 'ipi', 'frete', 'icms', 'entrada_id', 'produto_id'];
}
