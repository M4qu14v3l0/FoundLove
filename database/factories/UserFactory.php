<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_names'=> $this->faker->lastName(),
            'phone_number'=> $this-> faker ->phoneNumber(),
            'age' => $this-> faker -> numberBetween(18 , 70),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'sex' =>  $this-> faker -> randomElement(["male" , "female" , "other"]),
            'social_networks'=>  $this-> faker -> randomElement(["Facebook" , "Instagram"]),
            'traits'=>  $this-> faker ->text(100),
            'interests' => $this-> faker -> randomElement(["homosexual" , "heterosexual" , "other"]),
            'likes_recived'=> $this-> faker -> numberBetween(0 , 999),
            'matches'=> $this-> faker -> numberBetween(0 , 100),
            'photo' => $this->faker->imageUrl($width = 640, $height = 480),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'chats' => $this-> faker ->text(100),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
