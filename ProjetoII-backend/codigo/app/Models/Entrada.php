<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    use HasFactory;
    protected $table = "entradas";

    protected $fillable = ['valortotaldanota', 'dataentrada', 'fornecedor_id', 'usuario_id'];
}
