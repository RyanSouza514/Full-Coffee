<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    protected $table = "subcategorias";

    protected $fillable = ["nome_subcategoria", "categoria_id"];
    use HasFactory;
}
