<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InserindoServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('pt_BR');
   
        DB::table('tbl_servico')->insert([
            'idServico' => $faker->numberBetween(4),
            'descricao' => 'Reboque' ,
            'valor' => $faker->randomFloat(2, 35, 260),
            'situacao' => 'A',
            'created_at' => now(),
        ]);
        DB::table('tbl_servico')->insert([
            'idServico' => $faker->numberBetween(4),
            'descricao' => 'Troca de pneu' ,
            'valor' => $faker->randomFloat(2, 35, 260),
            'situacao' => 'I',
            'created_at' => now(),
        ]);
        DB::table('tbl_servico')->insert([
            'idServico' => $faker->numberBetween(4),
            'descricao' => 'Carga de bateria' ,
            'valor' => $faker->randomFloat(2, 35, 260),
            'situacao' => 'A',
            'created_at' => now(),
        ]);
        DB::table('tbl_servico')->insert([
            'idServico' => $faker->numberBetween(4),
            'descricao' => 'Chaveiro' ,
            'valor' => $faker->randomFloat(2, 35, 260),
            'situacao' => 'A',
            'created_at' => now(),
        ]);
        
    }
}
