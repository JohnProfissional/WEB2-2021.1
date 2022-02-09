<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produtos";

    protected $fillable = ['nomedoproduto', 'icms', 'ipi', 'frete', 'valornafabrica', 'valordecompra', 'lucro', 'valorvenda', 'desconto', 'quantidade', 'datavencimento', 'marca_id', 'categoria_id'];
}
