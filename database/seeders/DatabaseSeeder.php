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
<<<<<<< HEAD
        \App\Models\User::factory(10)->create();
        //\App\Models\regions::factory(3)->create();
        //$this->call(citiesSeeder::class);
=======
        //\App\Models\User::factory(10)->create();
=======
        \App\Models\User::factory(10)->create();
>>>>>>> c8be5a4971cebe8bad3fd8e370e9f2d942ec6b00
        //\App\Models\regions::factory(3)->create();
        $this->call(citiesSeeder::class);
>>>>>>> 9ee65978fd616e3544f83fff25716d047ae9cbf2




    }
}