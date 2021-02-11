<?php

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
        $this->call(InserindoPrestadoresSeeder::class);
        $this->call(InserindoServicosSeeder::class);
        $this->call(InserindoVeiculoBeneficiarioSeerder::class);
    }
}
