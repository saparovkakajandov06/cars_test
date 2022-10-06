<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Marka;

class MarkasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function run()
    {
        $marka = create('App\Marka', [], 15);
    }
}
