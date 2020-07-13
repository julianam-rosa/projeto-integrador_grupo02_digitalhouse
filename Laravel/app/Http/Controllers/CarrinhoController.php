<?php

namespace App\Http\Controllers;
use App\Pedido;
use App\PedidoProduto;
use Illuminate\Support\Facades\Auth;
use app\products;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    function __construct()
    {
        //obrigado estar logado
        $this->middleware('auth');

    }

    public function index(){
        $pedidos = Pedido::where([
            'status' => 'RE',
            'user_id' => Auth::id()
        ])->get();

      

        return view('carrinho', compact('pedidos'));
    }

    public function adicionar(){

        $this->middleware('VerifyCsrfToken');

        $req = Request();
        $idProduto = $req->input('id');

        $produto = products::find($idProduto);
        if( empty($produto->id)) {
            $req->session()->flash('mensagem-falha', 'Produto não encontrado em nossa loja!');
            return view('home');
        }

        $idUsuario = Auth::id();

        $idPedido = Pedido::consultaId([
            'user_id' => $idUsuario,
            'status' => 'Re' //reservada
        ]);

        if( empty($idPedido)) {
            $pedido_novo = Pedido::created([
                'user_id' => $idUsuario,
                'status' => 'Re' //reservada
            ]);

            $idPedido = $pedido_novo->id;
        }

        PedidoProduto::created([
            'pedido_id' => $idPedido,
            'products_id' => $idProduto,
            'valor' => $produto->valor,
            'status' => 'RE'
        ]);

        $req->session()->flash('mensagem-sucesso','Produto adicionado ao carrinho');

        return redirect()->route('carrinho.index');

    }




}
