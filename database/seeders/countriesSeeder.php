<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\countries;

class countriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $country = [
            [
                'country' => 'Peru',
                '_id'=>'1'
            ],
        ];

        foreach ($country as $countries) {
            countries::create($countries);
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 9ee65978fd616e3544f83fff25716d047ae9cbf2
