<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        
               
            
            'name' => 'Admin',
            'surname' => 'Admin',
            'sex' => 'M',
            'email' => 'admin@veduta.com.br',
            'password' => bcrypt('123456789'),
            'birthdate' => '1980-07-05',
            'cpf' => '11125422233',
            'newsletter' => false,
            'is_adm' => true,
        ]);
        }

    }
    