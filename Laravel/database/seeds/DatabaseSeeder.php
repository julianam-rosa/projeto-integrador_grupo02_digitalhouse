<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    //Rodar comando "composer dump-autoload" no terminal em caso de erro nas Seeders

    public function run()
    {
       // $this->call(Categories::class);
        //$this->call(AdminUserSeeder::class);
        //$this->call(CriarProdutosSeeder::class);        
        factory(User::class)->times(20)->create();
    }
}