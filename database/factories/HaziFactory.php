<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HaziFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'diak_nev' => $this->faker->name(),
            'feladat' => $this->faker->words(3, true),
            'url' => $this->faker->url(),
        ];
    }
}
