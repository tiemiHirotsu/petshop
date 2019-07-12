<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>1,
            'nome'=>'Cliente1',
            'email'=>'cliente1@gmail.com',
            'password'=>'123456'
        ]);

        DB::table('users')->insert([
            'id'=>2,
            'nome'=>'Cliente2',
            'email'=>'cliente2@gmail.com',
            'password'=>'123456'
        ]);
    }
}
