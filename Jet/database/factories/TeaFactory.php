<?php

namespace Database\Factories;

use App\Models\Tea;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'=> $this->faker->name(),
            'name' => $this->faker->name(),
            'type' => '녹차',
            'price' => 3000,
            'text' => '쓰다',
        ];
    }
}
