<?php

namespace Database\Seeders;
use Faker\Generator;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    public function run(Generator $faker) {
    
        for($i = 0; $i < 10; $i++){
            $newTrain = new Train(); 
            $newTrain->azienda = $faker->sentence(3);
            $newTrain->Stazione_di_partenza = $faker->sentence(3);
            $newTrain->Stazione_di_arrivo = $faker->sentence(3);
            $newTrain->Orario_di_partenza = $faker->time();
            $newTrain->Orario_di_arrivo = $faker->time();
            $newTrain->Codice_treno = $faker->sentence(3);
            $newTrain->Numero_Carrozze = $faker->randomFloat(1,0,9);
            $newTrain->In_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->data_di_partenza = $faker->date();
            $newTrain->save();
        }
    }
}
