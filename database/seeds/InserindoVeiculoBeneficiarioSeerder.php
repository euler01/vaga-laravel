<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InserindoVeiculoBeneficiarioSeerder extends Seeder
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
        while ($total <= 25) {
            $situacao = $situacao =='A' ? "I": "A";
            DB::table('tbl_veiculo')->insert([
                'idVeiculo'     => $faker->numberBetween(4),
                'placaVeiculo'  => 'ABC'.$faker->numberBetween(1000,9991),
                'chassiVeiculo' => 'ECY'.$faker->numberBetween(10000,91299),
                'corVeiculo'    => $faker->safeColorName,
                'nomeBeneficiario' => $faker->name,
                'cpfBeneficiario'   =>$faker->cpf(false),
                'situacao'      => $situacao,
                'created_at' => now(),
            ]);
            $total++;
        }
    }
}
