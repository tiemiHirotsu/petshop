<?php

use Illuminate\Database\Seeder;

class ServicosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('servicos')->insert([
            'id'=>1,
            'nome'=>'banho e tosa',
            'definicao'=>'serviço de banho e tosa de animais de estimação',
            'preco'=>'20.00',
            'foto'=>'imagens/banho.jpg'
        ]);

        DB::table('servicos')->insert([
            'id'=>2,
            'nome'=>'consulta veterinário',
            'definicao'=>'consulta com um veterinário credenciado e profissional',
            'preco'=>'100.00'
        ]);
    }
}
