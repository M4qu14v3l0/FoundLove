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
}