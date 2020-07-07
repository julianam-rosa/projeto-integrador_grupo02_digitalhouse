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

    public function listarCamisetas(){
        return view('categorias/camisetas');
        }

    public function listarCanecas(){
        return view('categorias/canecas');
        }

    public function listarCartoes(){
        return view('categorias/cartoes');
        }

    public function listarCases(){
        return view('categorias/cases');
        }

    public function listarChinelos(){
        return view('categorias/chinelos');
    }

    public function listarLeggins(){
        return view('categorias/leggins');
        }

    public function listarMagnetos(){
        return view('categorias/magnetos');
        }
    
    public function listarMeias(){
        return view('categorias/meias');
        }

    public function listarPosters(){
        $posters = [];
        return view('categorias/posters', ["posters" => $posters]);
    }
}
