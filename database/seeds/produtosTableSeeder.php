<?php

use Illuminate\Database\Seeder;
use App\Models\Produto;

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
        Produto::create([
            'nome_pro'=>'prod 1',
            'descricao_pro'=>'aqhu aqui'
        ]);
    }
}
