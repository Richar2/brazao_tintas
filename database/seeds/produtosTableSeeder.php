<?php

use Illuminate\Database\Seeder;
use App\Models\Produto;
use  Faker\Factory as Faker;

class produtosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->truncate();
        
        $faker= Faker::create();
        
        foreach(range(1,30) as $i) {
          
            Produto::create([
                'nome_pro'=>$faker->word(),
                'descricao_pro'=>$faker->sentence()
            ]);
        }

    }
}
