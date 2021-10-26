<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itensentrada extends Model
{
    use HasFactory;
    protected $table = "itensentrada";

    protected $fillable = ['iditensentrada', 'identrada', 'idproduto', 'precocompra', 'quantidade', 'ipi', 'frete', 'icms'];
    
}
