<?php

namespace App\Http\Controllers;

use App\CategoriasModel;
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
        $categorias = CategoriasModel::all();
        return view('cadastroProduto', compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriasModel::all();
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
        
        $produtos = User::findOrFail(Auth::user()->id);
        $produtos->produtos()->create([ 
            'nome' => $request['nome'],
            'preço' => $request['preço'],
            'descricao' => $request['descricao'],
            'imagem1' => $request['imagem1'],
            'imagem2' => $request['imagem2'],
            'imagem3' => $request['imagem3'],
            'categorias_id' => $request['categoria']
        
        ]);

        if($request->hasfile("imagem1")){
            $file = $request->file("imagem1");
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/todosProdutos', $filename);
            $produtos->imagem1 = $filename;
        }else{
            return $request;
            $produtos->imagem1 ='';
        }
        
        $produtos->save();
        return view('/cadastroProduto', compact('produtos'));
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
        $categorias = CategoriasModel::where('id'==1)->get();

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
