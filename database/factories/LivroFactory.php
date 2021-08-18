<?php

namespace Database\Factories;

use App\Models\Livro;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(5),
            'autor' => $this->faker->name(),
            'ISBN' => $this->faker->isbn13(),
            'resumo' => $this->faker->sentence(25),
            'preco' => $this->faker->randomFloat(2, 20, 100)
        ];
    }
}
