<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = "produto";

    protected $fillable = ['nomeproduto', 'quantidade', 'datavencimento'];

    function itensvenda(){
        return $this->hasMany(Itensvenda::class, 'produto_id', 'id');
    }
    function itensentrada(){
        return $this->hasMany(Itensentrada::class, 'produto_id', 'id');
    }
    
}
