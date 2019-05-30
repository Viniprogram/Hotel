<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        this->call(UsersTableSeeder::class);
        $this->command->info('Usuários adicionados com sucesso a tabela users');
        Model::reguard();
    }
}
