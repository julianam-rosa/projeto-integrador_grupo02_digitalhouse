<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function listarCategorias(Request $request, $id){
        $categorias = category::with('products')->get();
        
        return view('categoria/{id}',compact ('categorias'));
    }

   
    public function index(){
        $categorias = Category::all();
        
        return view('/home', compact('categorias'));
    
    }

    public function show($id)
    {
        $categorias = Category::where('id', $id)->first();
        $produtos = $categorias->products()->get();
        return view('categorias',compact ('categorias','produtos'));
        
        
    }


}