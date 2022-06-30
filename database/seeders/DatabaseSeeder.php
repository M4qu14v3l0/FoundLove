<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        \App\Models\User::factory(10)->create();
        //\App\Models\regions::factory(3)->create();
        //$this->call(citiesSeeder::class);



=======


        \App\Models\User::factory(10)->create();
        \App\Models\regions::factory(3)->create();
        $this->call(citiesSeeder::class);
>>>>>>> 48a56c040cfb2e3e14b5b65e5cefc5520d5fc7c9

    }
}