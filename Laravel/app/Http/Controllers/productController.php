<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\products;
use App\User;
use Illuminate\Support\Facades\{Auth, Validator, DB};

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
    public function create(Request $request)
    {
      
        $categorias = Category::all();
        return view('cadastroProduto', compact('categorias'));
        
        $mensagem = $request->session()->get('mensagem');

        return view('cadastro', compact('mensagem'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,        [
            'nome' => 'required|max:255',
            'preço' => 'required',
            'descricao' => 'required',
            'imagem1' => 'required',
            ],
        [
            'required' => 'O campo :attribute é necessário.',
            'max' => 'O campo :attribute deve ter no máximo :max caracteres.',
            
                ]
    );


        DB::beginTransaction();
       
        $user = User::findOrFail(Auth::user()->id);
        $produto = new products();
        $produto->name = $request["nome"];
        $produto->price = $request["preço"];
        $produto->description = $request["descricao"];
        $produto->category_id = $request["categoria"];
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

        DB::commit();

        $request->session()->flash('mensagem',
        "Produto cadastrado com sucesso.");

        return redirect()->route('Produtos');

       
     
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
        $produtos = products::find($id);
        $categorias = Category::all();
        return view('editarProduto', compact('produtos', 'categorias'));
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
        DB::beginTransaction();

        $produto = products::find($id);
        $produto->name = $request["nome"];
        $produto->price = $request["preço"];
        $produto->description = $request["descricao"];
        $produto->category_id = $request["categoria"];

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

        DB::commit();

        return redirect()->route('Perfil');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //

        $produtos = products::find($id);
        $produtos->delete();

        return redirect()->route('Perfil');  

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
        $usuario=User::find(Auth::user()->id);
        $produtos = $usuario->produtos()->paginate(10); 
        $total = count($produtos);
        $categorias = Category::all();

        return view('perfilArtista', compact('produtos', 'total', 'categorias', 'usuario'));
      
    }

    public function detalhes($id){
        $produtos = products::find($id);
              return view('detalheProduto', ['produtos'=>$produtos]);

    }


}