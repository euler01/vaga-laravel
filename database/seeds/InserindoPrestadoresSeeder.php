<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InserindoPrestadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');

        $situacao ="";
        $total = 0;
        while ($total <= 10) {
            $situacao = $situacao =='A' ? "I": "A";
            DB::table('tbl_prestador')->insert([
                'idPrestador' => $faker->numberBetween(4),
                'nome' => $faker->name,
                'documento' => $faker->cnpj(false),
                'situacao' => $situacao,
                'created_at' => now(),
            ]);
            $total++;
        }

    }
}
