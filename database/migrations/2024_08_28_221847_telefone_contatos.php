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
        Schema::create('telefone_contatos', function (Blueprint $table) {
            $table->id();
            $table->string('telefone');
            $table->unsignedBigInteger('contato_id');
            $table->foreign('contato_id')->references('id')->on('contatos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefone_contatos');
    }
};
