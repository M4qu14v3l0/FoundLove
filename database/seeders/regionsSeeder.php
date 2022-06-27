<?php

namespace Database\Seeders;

use App\Models\regions;
use Illuminate\Database\Seeder;

class regionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $region = [
            [
                'region' => 'Amazonas',
                'country_id'=>'1',
                '_id'=>'1',
            ],
            [
                'region' => 'Áncash',
                'country_id'=>'1',
                '_id'=>'2',
            ],
            [
                'region' => 'Apurimac',
                'country_id'=>'1',
                '_id'=>'3',
            ],
            [
                'region' => 'Arequipa',
                'country_id'=>'1',
                '_id'=>'4',
            ],
            [
                'region' => 'Ayacucho',
                'country_id'=>'1',
                '_id'=>'5',
            ],
            [
                'region' => 'Cajamarca',
                'country_id'=>'1',
                '_id'=>'6',
            ],
            [
                'region' => 'Callao',
                'country_id'=>'1',
                '_id'=>'7',
            ],
            [
                'region' => 'Cusco',
                'country_id'=>'1',
                '_id'=>'8',
            ],
            [
                'region' => 'Huancavelica',
                'country_id'=>'1',
                '_id'=>'9',
            ],
            [
                'region' => 'Huánuco',
                'country_id'=>'1',
                '_id'=>'10',
            ],
            [
                'region' => 'Ica',
                'country_id'=>'1',
                '_id'=>'11',
            ],
            [
                'region' => 'Junín',
                'country_id'=>'1',
                '_id'=>'12',
            ],
            [
                'region' => 'La_Libertad',
                'country_id'=>'1',
                '_id'=>'13',
            ],
            [
                'region' => 'Lambayeque',
                'country_id'=>'1',
                '_id'=>'14',
            ],
            [
                'region' => 'Lima',
                'country_id'=>'1',
                '_id'=>'15',
            ],
            [
                'region' => 'Loreto',
                'country_id'=>'1',
                '_id'=>'16',
            ],
            [
                'region' => 'Madre_de_Dios',
                'country_id'=>'1',
                '_id'=>'17',
            ],
            [
                'region' => 'Moquegua',
                'country_id'=>'1',
                '_id'=>'18',
            ],
            [
                'region' => 'Pasco',
                'country_id'=>'1',
                '_id'=>'19',
            ],
            [
                'region' => 'Piura',
                'country_id'=>'1',
                '_id'=>'20',
            ],
            [
                'region' => 'Puno',
                'country_id'=>'1',
                '_id'=>'21',
            ],
            [
                'region' => 'San_Martin',
                'country_id'=>'1',
                '_id'=>'22',
            ],
            [
                'region' => 'Tacna',
                'country_id'=>'1',
                '_id'=>'23',
            ],
            [
                'region' => 'Tumbes',
                'country_id'=>'1',
                '_id'=>'24',
            ],
            [
                'region' => 'Ucayali',
                'country_id'=>'1',
                '_id'=>'25',
            ],
        ];

        foreach ($region as $regions) {
            regions::create($regions);
        }
    }
}
