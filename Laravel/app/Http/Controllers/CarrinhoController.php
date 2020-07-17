<?php

namespace App\Http\Controllers;
use App\Pedido;
use App\PedidoProduto;
use Illuminate\Support\Facades\Auth;
use App\products;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Boolean;

class CarrinhoController extends Controller
{
    function __construct()
    {
        //obrigado estar logado
        $this->middleware('auth');

    }

    public function index(Request $request){
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

        $mensagem = $request->session()->get('mensagem');

        return view('carrinho', compact('pedidos', 'mensagem'));
    }

    public function adicionar(){

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idProduto = $req->input('id');

        $produto = products::find($idProduto);
        if( empty($produto->id)) {
            $req->session()->flash('mensagem', 'Produto não encontrado em nossa loja!');
            return view('home');
        }

        $idUsuario = Auth::id();

        $idPedido = Pedido::consultaId([
            'user_id' => $idUsuario,
            'status' => 'RE' //reservada
        ]);

        if( empty($idPedido)) {
            $pedido_novo = Pedido::create([ 
                'user_id' => $idUsuario,
                'status' => 'RE' //reservada
            ]);

            $idPedido = $pedido_novo->id ;
        }

        PedidoProduto::create([
            'pedido_id' => $idPedido,
            'products_id' => $idProduto,
            'valor' => $produto->price,
            'status' => 'RE'
        ]);

        $req->session()->flash('mensagem','Produto adicionado ao carrinho');

        return redirect()->route('carrinho.index');

    }



    public function remover(){

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idPedido            = $req->input('pedido_id');
        $idProduto           = $req->input('products_id');
        $remove_apenas_item  = (Boolean)$req->input('item');
        $idUsuario           = Auth::id();

        $idPedido = Pedido::consultaId([
            'id' => $idPedido,
            'user_id' => $idUsuario,
            'status' => 'RE'
        ]);

        if( empty($idPedido)){
            $req->session()->flash('mensagem', 'Pedido não encotrado');
            return redirect()->route('carrinho.index');
        }

        $where_produto =[
            'pedido_id' => $idPedido,
            'products_id' => $idProduto,
        ];

        $produtos = PedidoProduto::where($where_produto)->get();
        
        foreach ($produtos as $produto) {
            
        if( empty($produto->id)) {
            $req->session()->flash('mensagem', 'Produto não encotrado no carrinho');
            return redirect()->route('carrinho.index');
        }

        if($remove_apenas_item){
            $where_produto['id'] = $produto->id;
        }
        PedidoProduto::where($where_produto)->delete();

        $check_pedido = PedidoProduto::where([
            'pedido_id' => $produto->pedido_id
        ])->exists();

        if( !$check_pedido){
            Pedido::where([
                'id' => $produto->pedido_id
            ])->delete();
        }
    }

        $req->session()->flash('mensagem', 'Produto removido');

        return redirect()->route('carrinho.index');
    }




}
