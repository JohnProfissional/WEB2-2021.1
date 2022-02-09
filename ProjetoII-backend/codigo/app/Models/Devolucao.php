<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devolucao extends Model
{
    use HasFactory;
    protected $table = "devolucoes";

    protected $fillable = ['datadevolucao', 'descricaodadevolucao', 'quantidadedevolvida', 'itensvendas_id'];
}
