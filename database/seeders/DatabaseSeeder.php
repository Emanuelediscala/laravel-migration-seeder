<?php

namespace Database\Seeders;

use Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call(TrainsTableSeeder::class);
    }
    
}