<?php

namespace Database\Factories;

use App\Models\Produtos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produtos>
 */
class ProdutosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Produtos::class;

    public function definition(): array
    {
        return [
            'nome_produto' => $this->faker->word(),
            'descricao' => $this->faker->sentence(),
            'observacao' => $this->faker->sentence(),
            'preco' => $this->faker->randomFloat(2, 10, 1000),
            'imagem' => $this->faker->imageUrl(640, 480, 'product'),
            'check' => $this->faker->boolean(),
            'categoria_id' => 1,
            'subcategoria_id' => 1, // Relacionamento com subcategoria
            // 'categoria_id' => \App\Models\Categoria::factory(), // Relacionamento com categoria
            // 'subcategoria_id' => \App\Models\Subcategoria::factory(), // Relacionamento com subcategoria
        ];
    }
}
