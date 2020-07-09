<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Almofadas'
        ]);

        DB::table('categories')->insert([
            'name' => 'Bolsas'
        ]);

        DB::table('categories')->insert([
            'name' => 'Cadernos'
        ]);

        DB::table('categories')->insert([
            'name' => 'Camisetas'
        ]);

        DB::table('categories')->insert([
            'name' => 'Canecas'
        ]);

        DB::table('categories')->insert([
            'name' => 'Cartões Postais'
        ]);

        DB::table('categories')->insert([
            'name' => 'Cases'
        ]);

        DB::table('categories')->insert([
            'name' => 'Chinelos'
        ]);

        DB::table('categories')->insert([
            'name' => 'Leggins'
        ]);

        DB::table('categories')->insert([
            'name' => 'Magnetos'
        ]);

        DB::table('categories')->insert([
            'name' => 'Meias'
        ]);

        DB::table('categories')->insert([
            'name' => 'Posters'
        ]);
    }
}
