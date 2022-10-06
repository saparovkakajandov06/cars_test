<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Brand;


class BrandsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function run()
    {  
            $brand = create('App\Brand', [], 15);
            
    }
}
