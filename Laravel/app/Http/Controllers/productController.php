<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\products;
use App\User;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = Category::all();
        return view('cadastroProduto', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Category::all();
        return view('cadastroProduto', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $user = User::findOrFail(Auth::user()->id);
        $produto = new products();
        $produto->name = $request['nome'];
        $produto->price = $request['preço'];
        $produto->description = $request['descricao'];
        $produto->category_id = $request['categoria'];
        $produto->user_id = Auth::user()->id;
    
        if($request->hasfile("imagem1")) {
            $file = $request->file("imagem1");
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/todosProdutos', $filename);
            $produto->image1 = $filename;
        }

        if($request->hasfile("imagem2")){
            $file = $request->file("imagem2");
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/todosProdutos', $filename);
            $produto->image2 = $filename;
        }

        if($request->hasfile("imagem3")){
            $file = $request->file("imagem3");
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/todosProdutos', $filename);
            $produto->image3 = $filename;
        }
        
        $produto->save();

        $categorias = Category::all();
        return view('cadastroProduto', compact('categorias'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    public function listarProdutos(){
        $produtos = products::all();
        $categorias = Category::where('id'==1)->get();

        return view('pe', ['produtos'=> $produtos]);
    }


    public function procurarProdutos(Request $request){
  
        $todosProdutos = new products();
        $resultado = $todosProdutos->search($request->filter);
      
        return view('home', ['todosProdutos'=> $resultado]);
    }


    public function indexPerfil()
    {
        $user=User::find(Auth::user()->id);
        $produtos = $user->produtos()->get(); 
        $total = count($produtos);
        return view('perfilArtista', compact('produtos','total'));
      
    }





}
