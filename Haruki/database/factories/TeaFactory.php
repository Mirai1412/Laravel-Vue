<?php

namespace Database\Factories;

use App\Models\Teaname;
use CreateTeasTable;
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
        if (Teaname::all()->count() == 0) {
            $t = new Teaname();
            $t->name = 'Mirai';
            $t->save();
        }else{
            $t = Teaname::first();
        }

        return [
            'image'=> $this->faker->name(),
            'teaname_id' => $t->id,
            'money' => 3000,
            'text' => '달달구리한 녹차',
        ];
    }
}
