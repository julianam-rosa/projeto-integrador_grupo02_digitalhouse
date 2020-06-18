<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bolsasModel;

class cadernosController extends Controller
{
        public function listarCadernos(){
        $cadernos = [];
        return view('categorias/cadernos', ["cadernos" => $cadernos]);
        }
}
