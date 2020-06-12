<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bolsasModel;

class bolsasController extends Controller
{
    //
    public function listarBolsas(){
        $bolsas = [];
        return view('categorias/bolsas', ["bolsas" => $bolsas]);
    }
}
