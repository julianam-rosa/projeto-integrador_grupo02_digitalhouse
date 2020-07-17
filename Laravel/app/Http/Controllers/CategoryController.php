<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests; 
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
        $produtos = $categorias->products()->paginate(6);
        return view('categorias',compact ('categorias','produtos'));
        
        
    }
    
    public function create(Request $request)
    {
      
        $categorias = Category::all();
        return view('cadastroProduto', compact('categorias'));
        
        $mensagem = $request->session()->get('mensagem');

        return view('cadastro', compact('mensagem'));
        
    }

public function destroi($id)
    {

        //

        $categorias = Category::find($id);
        $categorias->delete();

        return redirect()->route('home');

    }

    public function indexcrud(){
        $categorias = Category::all();
        
        return view('/crudCategorias', compact('categorias'));
    
    }

    public function createCrudeCategorias(Request $request)
    {
               $categorias = Category::all();
              $mensagem = $request->session()->get('mensagem');

        return view('crudCategorias', compact('mensagem', 'categorias'));
        
           }

    public function store(Request $request)
    {
        
        $categorias = new Category();
        $categorias->name = $request["name"];
        
        $categorias->save();

        return redirect()->route('home');
    }

}