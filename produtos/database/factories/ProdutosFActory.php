<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\produtosModel;
use Faker\Generator as Faker;

$factory->define(produtosModel::class, function (Faker $faker) {
    return [
        "nome" =>$faker->unique()->word,
        "descricao" => $faker->sentence(),
        "preço" => 12.2,
    ];
});
