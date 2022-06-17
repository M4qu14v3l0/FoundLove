<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\cities;

class citiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $city = [
            [
                'city' => 'Bagua_Grande',
                'region_id'=>'1',
            ],
            [
                'city' => 'Chachapoyas',
                'region_id'=>'1',
            ],
            [
                'city' => 'Bagua',
                'region_id'=>'1',
            ],
            [
                'city' => 'Chimbote',
                'region_id'=>'2',
            ],
            [
                'city' => 'Huaraz',
                'region_id'=>'2',
            ],
            [
                'city' => 'Huarmey',
                'region_id'=>'2',
            ],
            [
                'city' => 'Casma',
                'region_id'=>'2',
            ],[
                'city' => 'Caraz',
                'region_id'=>'2',
            ],
            [
                'city' => 'Abancay',
                'region_id'=>'3',
            ],
            [
                'city' => 'Andahuaylas',
                'region_id'=>'3',
            ],
            [
                'city' => 'Arequipa',
                'region_id'=>'4',
            ],
            [
                'city' => 'Camaná',
                'region_id'=>'4',
            ],
            [
                'city' => 'Mollendo',
                'region_id'=>'4',
            ],
            [
                'city' => 'Mejía',
                'region_id'=>'4',
            ],
            [
                'city' => 'Majes',
                'region_id'=>'4',
            ],
            [
                'city' => 'Ayacucho',
                'region_id'=>'5',
            ],
            [
                'city' => 'Huanta',
                'region_id'=>'5',
            ],
            [
                'city' => 'Puquio',
                'region_id'=>'5',
            ],
            [
                'city' => 'Coracora',
                'region_id'=>'5',
            ],
            [
                'city' => 'Vilcashuamán',
                'region_id'=>'5',
            ],
            [
                'city' => 'Cangallo',
                'region_id'=>'5',
            ],
            [
                'city' => 'Cajamarca',
                'region_id'=>'6',
            ],
            [
                'city' => 'Jaén',
                'region_id'=>'6',
            ],
            [
                'city' => 'Cutervo',
                'region_id'=>'6',
            ],
            [
                'city' => 'Chota',
                'region_id'=>'6',
            ],
            [
                'city' => 'Celendín',
                'region_id'=>'6',
            ],
            [
                'city' => 'Cajabamba',
                'region_id'=>'6',
            ],
            [
                'city' => 'Bambamarca',
                'region_id'=>'6',
            ],
            [
                'city' => 'San_Ingnacio',
                'region_id'=>'6',
            ],
            [
                'city' => 'Callao',
                'region_id'=>'7',
            ],
            [
                'city' => 'Cusco',
                'region_id'=>'8',
            ],
            [
                'city' => 'Sicuani',
                'region_id'=>'8',
            ],
            [
                'city' => 'Quillabamba',
                'region_id'=>'8',
            ],
            [
                'city' => 'Huancavelica',
                'region_id'=>'9',
            ],
            [
                'city' => 'Huánuco',
                'region_id'=>'10',
            ],
            [
                'city' => 'Tingo_María',
                'region_id'=>'10',
            ],
            [
                'city' => 'Ica',
                'region_id'=>'11',
            ],
            [
                'city' => 'Chinca_Alta',
                'region_id'=>'11',
            ],
            [
                'city' => 'Pisco',
                'region_id'=>'11',
            ],
            [
                'city' => 'Nazca',
                'region_id'=>'11',
            ],
            [
                'city' => 'Huancayo',
                'region_id'=>'12',
            ],
            [
                'city' => 'Tarma',
                'region_id'=>'12',
            ],
            [
                'city' => 'Jauja',
                'region_id'=>'12',
            ],
            [
                'city' => 'La_Oroya',
                'region_id'=>'12',
            ],
            [
                'city' => 'La_Merced',
                'region_id'=>'12',
            ],
            [
                'city' => 'Satipo',
                'region_id'=>'12',
            ],
            [
                'city' => 'Pichanaqui',
                'region_id'=>'12',
            ],
            [
                'city' => 'Trujillo',
                'region_id'=>'13',
            ],
            [
                'city' => 'Huanchaco',
                'region_id'=>'13',
            ],
            [
                'city' => 'Huamachuco',
                'region_id'=>'13',
            ],
            [
                'city' => 'Virú',
                'region_id'=>'13',
            ],
            [
                'city' => 'Chepén',
                'region_id'=>'13',
            ],
            [
                'city' => 'Pacasmayo',
                'region_id'=>'13',
            ],
            [
                'city' => 'Guadalupe',
                'region_id'=>'13',
            ],
            [
                'city' => 'Chiclayo',
                'region_id'=>'14',
            ],
            [
                'city' => 'Lambayeque',
                'region_id'=>'14',
            ],
            [
                'city' => 'Ferreñafe',
                'region_id'=>'14',
            ],
            [
                'city' => 'Mossefú',
                'region_id'=>'14',
            ],
            [
                'city' => 'Lima',
                'region_id'=>'15',
            ],
            [
                'city' => 'Huacho',
                'region_id'=>'15',
            ],
            [
                'city' => 'Huarai',
                'region_id'=>'15',
            ],
            [
                'city' => 'Cañete',
                'region_id'=>'15',
            ],
            [
                'city' => 'Barranca',
                'region_id'=>'15',
            ],
            [
                'city' => 'Chancay',
                'region_id'=>'15',
            ],
            [
                'city' => 'Paramonga',
                'region_id'=>'15',
            ],
            [
                'city' => 'Iquitos',
                'region_id'=>'16',
            ],
            [
                'city' => 'Yurimaguas',
                'region_id'=>'16',
            ],
            [
                'city' => 'Requena',
                'region_id'=>'16',
            ],
            [
                'city' => 'Puerto_Maldonado',
                'region_id'=>'17',
            ],
            [
                'city' => 'Moquegua',
                'region_id'=>'18',
            ],
            [
                'city' => 'Ilo',
                'region_id'=>'18',
            ],
            [
                'city' => 'Cerro_de_Pasco',
                'region_id'=>'19',
            ],
            [
                'city' => 'Oxapampa',
                'region_id'=>'19',
            ],
            [
                'city' => 'Piura',
                'region_id'=>'20',
            ],
            [
                'city' => 'Sullana',
                'region_id'=>'20',
            ],
            [
                'city' => 'Paita',
                'region_id'=>'20',
            ],
            [
                'city' => 'Talara',
                'region_id'=>'20',
            ],
            [
                'city' => 'Catacaos',
                'region_id'=>'20',
            ],
            [
                'city' => 'Chulucanas',
                'region_id'=>'20',
            ],
            [
                'city' => 'Sechura',
                'region_id'=>'20',
            ],
            [
                'city' => 'Jualiaca',
                'region_id'=>'21',
            ],
            [
                'city' => 'Puno',
                'region_id'=>'21',
            ],
            [
                'city' => 'llave',
                'region_id'=>'21',
            ],
            [
                'city' => 'Ayaviri',
                'region_id'=>'21',
            ],
            [
                'city' => 'Azágaro',
                'region_id'=>'21',
            ],
            [
                'city' => 'Tarapoto',
                'region_id'=>'22',
            ],
            [
                'city' => 'Moyobamba',
                'region_id'=>'22',
            ],
            [
                'city' => 'Juanjuí',
                'region_id'=>'22',
            ],
            [
                'city' => 'Rioja',
                'region_id'=>'22',
            ],
            [
                'city' => 'Tacna',
                'region_id'=>'23',
            ],
            [
                'city' => 'Tumbes',
                'region_id'=>'24',
            ],
            [
                'city' => 'Zarumilla',
                'region_id'=>'24',
            ],
            [
                'city' => 'Pucallpa',
                'region_id'=>'25',
            ],



        ];
            foreach ($city as $cities) {
                cities::create($cities);
            }
    }
}
