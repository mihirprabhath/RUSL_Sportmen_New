<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    protected $model = \App\Models\Team::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'image' => 'https://via.placeholder.com/100', // Placeholder image
            'captain' => $this->faker->name(),
            'description' => $this->faker->sentence(),
        ];
    }
}
