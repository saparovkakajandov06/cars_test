<?php

namespace Database\Factories\App;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models;

class ModelsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function run()
    {
        $models = create('App\Models', [], 15);
    }
}
