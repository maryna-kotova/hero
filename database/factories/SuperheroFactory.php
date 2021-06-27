<?php

namespace Database\Factories;

use App\Models\Superhero;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuperheroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Superhero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nickname' => $this->faker->name(),
            'real_name' => $this->faker->name(),
            'origin_description' => $this->faker->paragraphs(2, true),
            'superpowers' => $this->faker->sentence(15, true),
            'catch_phrase' => $this->faker->sentence(10, true),
            'img' => null,    
        ];
    }
}
