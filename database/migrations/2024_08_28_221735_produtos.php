<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome_produto');
            $table->text('descricao');
            $table->string('observacao');
            $table->decimal('preco', 10, 2);
            $table->string('imagem');
            $table->tinyInteger('check');
            $table->unsignedBigInteger('subcategoria_id');
            $table->foreign('subcategoria_id')->references('id')->on('subcategorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
