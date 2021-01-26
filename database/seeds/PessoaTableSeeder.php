<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('pessoas')->insert(
        //     [
        //         'nome' => 'Administrator',
        //         'data_nasc' => '10/10/1010',
        //         'usuario' => '1',
                
        //     ]
        // );

        factory(App\Pessoa::class, 40)->create();
    }
}
