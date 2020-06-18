<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\almofadasModel;

class almofadasController extends Controller
{
    public function listarAlmofadas(){
        $almofadas = [];
        return view('categorias/almofadas', ["almofadas" => $almofadas]);
    }
}
