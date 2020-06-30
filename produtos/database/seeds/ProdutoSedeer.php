<?php

use Illuminate\Database\Seeder;
use App\produtosModel;

class ProdutoSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //$novo = new produtosModel();
       // $novo->nome = "teste";
        //$novo->preço =5.00;
        //$novo->descricao="teste teste teste";
        //$novo->save();

        factory(produtosModel::class, 50)->create();

    }
}
