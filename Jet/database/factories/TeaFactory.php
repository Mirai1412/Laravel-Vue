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
        $t = null;
        if (Tea::all()->count() == 0) {
            $t = new Tea();
            $t->name = '홍차';
            $t->save();
        }else{
            $t = Tea::first();
        }

        return [
            'image'=> 'adsd',
            'name' => $this->faker->name(),
            'type_id' => 1,
            'price' => 3000,
            'text' => '쓰다',
        ];
    }
}
