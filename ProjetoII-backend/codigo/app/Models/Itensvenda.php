<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itensvenda extends Model
{
    use HasFactory;
    protected $table = "itensvendas";

    protected $fillable = ['quantidadeitens', 'valor', 'desconto', 'venda_id', 'produto_id'];
}
