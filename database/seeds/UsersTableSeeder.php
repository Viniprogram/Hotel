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
            'name' => 'gerente',
            'email' => 'gerencia@gmail.com',
            'email_verified_at' => date('Y-m-d h:i:s'),
            'password' => '12345678',
            'created_at' => date('Y-m-d h:i:s'),
            'Nivel_Acesso' => 1,
            'Codigo_Hotel' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => date('Y-m-d h:i:s'),
            'password' => '98765432',
            'created_at' => date('Y-m-d h:i:s'),
            'Nivel_Acesso' => 2,
            'Codigo_Hotel' => 1
        ]);
    }
}
