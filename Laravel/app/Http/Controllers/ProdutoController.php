<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function indexProduto()
{
    $registros = Produto::where ([
        'ativo' => 'S'
    ])->get();

    return view('produto.index',compact ('registros'));
}

public function produto($id = null)
{
    if(!empty($id)){
        $registro=Produto::where([
            'id'=>$id,
            'ativo'=>'S'
        ])->first();

        if(!empty($registro)) {
            return view ('home.produto', compact('registro'));
        }
    }
    return redirect()->route('indexProduto');
}
}