<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class bookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code'=>$this->faker->numberBetween(2,1000),
            'title'=>$this->faker->title(),
            'ISBN'=>$this->faker->sentence(1),
            'editorial'=>$this->faker->title(),
            'pages'=>$this->faker->numberBetween(10,300)
        ];
    }
}
