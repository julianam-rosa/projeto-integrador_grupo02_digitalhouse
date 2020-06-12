<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postersModel;

class postersController extends Controller
{
    //
    public function listarPosters(){
        $posters = [];
        return view('categorias/posters', ["posters" => $posters]);
        }
}
