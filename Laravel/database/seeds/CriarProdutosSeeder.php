<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CriarProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Almofada ".$i,
                'price' => '10',
                'description' => 'Lorem Ipson',
                'category_id' => 1,
                'user_id' => 1,
                'image1' => "a-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Bolsa ".$i,
                'price' => '90',
                'description' => 'Lorem Ipson',
                'category_id' => 2,
                'user_id' => 1,
                'image1' => "bolsa-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Caderno ".$i,
                'price' => '20',
                'description' => 'Lorem Ipson',
                'category_id' => 3,
                'user_id' => 1,
                'image1' => "caderno-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Camisa ".$i,
                'price' => '30',
                'description' => 'Lorem Ipson',
                'category_id' => 4,
                'user_id' => 1,
                'image1' => "camisa-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Caneca ".$i,
                'price' => '20',
                'description' => 'Lorem Ipson',
                'category_id' => 5,
                'user_id' => 1,
                'image1' => "caneca-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 4; $i++) {
            DB::table('products')->insert([
                'name' => "Cartão ".$i,
                'price' => '5',
                'description' => 'Lorem Ipson',
                'category_id' => 6,
                'user_id' => 1,
                'image1' => "cartao-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 5; $i++) {
            DB::table('products')->insert([
                'name' => "Case ".$i,
                'price' => '30',
                'description' => 'Lorem Ipson',
                'category_id' => 7,
                'user_id' => 1,
                'image1' => "case-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 7; $i++) {
            DB::table('products')->insert([
                'name' => "Chinelo ".$i,
                'price' => '30',
                'description' => 'Lorem Ipson',
                'category_id' => 8,
                'user_id' => 1,
                'image1' => "chinelo-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 6; $i++) {
            DB::table('products')->insert([
                'name' => "Legging ".$i,
                'price' => '30',
                'description' => 'Lorem Ipson',
                'category_id' => 9,
                'user_id' => 1,
                'image1' => "leg-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Magneto ".$i,
                'price' => '10',
                'description' => 'Lorem Ipson',
                'category_id' => 10,
                'user_id' => 1,
                'image1' => "mag-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Meias ".$i,
                'price' => '15',
                'description' => 'Lorem Ipson',
                'category_id' => 11,
                'user_id' => 1,
                'image1' => "meia-".$i.".jpg"
        ]);
        }

        for ($i = 1; $i <= 9; $i++) {
            DB::table('products')->insert([
                'name' => "Poster ".$i,
                'price' => '30',
                'description' => 'Lorem Ipson',
                'category_id' => 12,
                'user_id' => 1,
                'image1' => "poster-".$i.".jpg"
        ]);
        }
    }
}
