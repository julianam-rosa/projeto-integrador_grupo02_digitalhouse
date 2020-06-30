<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produtosModel;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class produtosController extends Controller
{
    public function listarProdutos(){
        $todosProdutos = produtosModel::paginate(20);

        return view('listaProdutos', ['todosProdutos'=> $todosProdutos]);
    }

    public function detalhesProdutos($id){
        $todosProdutos = produtosModel::find($id);

        return view('detalhesProdutos', ['todosProdutos'=>$todosProdutos]);
    }

    public function cadastrarProdutos(Request $request){
        if($request->isMethod('GET')){
            return view('cadastrarProduto');
        }
        $todosProdutos = new produtosModel();

        $todosProdutos->nome = $request->input("nome");
        $todosProdutos->preço = $request->input("preço");
        $todosProdutos->descricao = $request->input("descricao");

        if($request->hasfile("imagem")){
            $file = $request->file("imagem");
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/todosProdutos', $filename);
            $todosProdutos->imagem = $filename;
        }else {
            return $request;
            $todosProdutos->imagem= '';
        }

        $todosProdutos->save();

        return view('cadastrarProduto', ['todosProdutos'=> $todosProdutos]);
       

        /*
        if($request->isMethod('GET')){
            return view('cadastrarProduto');
        }

        //validando
        $validate =$request->validate([
        'nome'=>'required|min:3',
        'descricao'=> 'required|min:3',
        'preço'=> 'required|numeric',
        'imagem'=> 'nullable|image',
        ]);

        $novoProduto = new produtosModel();
        $novoProduto->nome= $request->nome;
        $novoProduto->preço= $request->preço;
        $novoProduto->descricao= $request->descricao;
        $novoProduto->imagem = $request->imagem;
        $novoProduto->save();

        $resultado = $novoProduto->save();
        return view('cadastrarProduto', ['resultado'=>$resultado]);
        */
    }

    public function deletarProdutos($id){
        $todosProdutos = produtosModel::find($id);
        $todosProdutos->delete();

        return redirect()->action('produtosController@listarProdutos');
    }

    public function procurarProdutos(Request $request){
  
        $todosProdutos = new produtosModel();
        $resultado = $todosProdutos->search($request->filter);
      
        return view('listaProdutos', ['todosProdutos'=> $resultado]);
    }

    
    public function imagem(Request $request){

        //nome original do arquivo
        $nome = $request->file('imagem')->getClientOriginalName();
        $urlBase = 'storage/img'.$nome;

        dd($request->file('imagem'));
        $save = $request->file('imagem')->storeAs("public/produtos", $urlBase);
        

    
        return view('listaProdutos', ['linkImg'=> $urlBase]); 
        
    }


    public function edit($id){

        $todosProdutos = produtosModel::find($id);
        return view('updateForm')->with('todosProdutos',$todosProdutos);
    }
    
    public function update(Request $request, $id){
        

        $todosProdutos = produtosModel::find($id);

        $todosProdutos->name = $request->input("nome");
        $todosProdutos->preço = $request->input("preço");
        $todosProdutos->descricao = $request->input("descricao");

        if($request->hasfile("imagem")){
            $file = $request->file("imagem");
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('uploads/todosProdutos', $filename);
            $todosProdutos->imagem = $filename;
        }

        $todosProdutos->save();

        return redirect('listaProdutos')->with('todosProdutos',$todosProdutos);


    }


}
