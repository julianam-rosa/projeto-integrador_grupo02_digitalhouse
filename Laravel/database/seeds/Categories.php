<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;
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
        $now = Carbon::now()->toDateTimeString();

        DB::table('categories')->insert([
            'name' => 'Almofadas',
            'slug' => 'almofadas',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Bolsas',
            'slug' => 'bolsas',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Cadernos',
            'slug' => 'cadernos',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Camisetas',
            'slug' => 'camisetas',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Canecas',
            'slug' => 'canecas',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Cartões Postais',
            'slug' => 'cartoes-postais',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Cases',
            'slug' => 'cases',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Chinelos',
            'slug' => 'chinelos',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Leggings',
            'slug' => 'leggings',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Magnetos',
            'slug' => 'magnetos',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Meias',
            'slug' => 'meias',
            'created_at' => $now,
            'updated_at' => $now
        ]);

        DB::table('categories')->insert([
            'name' => 'Posters',
            'slug' => 'posters',
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }
}
