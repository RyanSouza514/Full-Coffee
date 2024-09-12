<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        "categoria_id",
        "subcategoria_id",
        "nome_produto",
        "preco",
        "imagem",
        "check",
        "descricao",
        "observacao"
    ];
    use HasFactory;

    protected  $casts = [
            'check' => 'boolean'
    ];
    
}
