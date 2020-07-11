<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoryController extends Controller
{
    public function listarCategorias(Request $request, $id){
        $categorias = category::with('products')->get() ;
        
        return view('categoria/{id}',compact ('categorias'));
    }

    public function index(){
        $categorias = category::all();
        
        return view('/home', compact('categorias'));
    
    }
}