<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Casts\Attribute;
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
    // protected $appends = ["e_ativo"];
    
    use HasFactory;

    protected  $casts = [
            'check' => 'boolean'
    ];

    // public function getEAtivo(){
    //     return $this->check == 1 ? 'Sim': 'Não';
    // }

    // public function EAtivo()
    // {
    //     return new Attribute(
    //         get: fn () => $this->check == 1 ? 'Sim': 'Não'
    //     );  
    // }
    
}
