<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        //ejecutar seeder de divisiones
        $this->call(divisionesSeeder::class);
    }
}
