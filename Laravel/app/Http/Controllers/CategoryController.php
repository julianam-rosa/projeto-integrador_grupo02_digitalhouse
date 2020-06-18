<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function listarAlmofadas(){
        $almofadas = [];
        return view('categorias/almofadas', ["almofadas" => $almofadas]);
    }

    public function listarBolsas(){
        $bolsas = [];
        return view('categorias/bolsas', ["bolsas" => $bolsas]);
    }

    public function listarCadernos(){
        $cadernos = [];
        return view('categorias/cadernos', ["cadernos" => $cadernos]);
        }

    public function listarPosters(){
        $posters = [];
        return view('categorias/posters', ["posters" => $posters]);
        }
}
