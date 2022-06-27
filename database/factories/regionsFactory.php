<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class regionsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'regions_id' => "62a38c381209000041003a42",
            'region'=>$this-> faker -> randomElement(["costa" , "sierra" , "selva"]),
        ];
    }
}