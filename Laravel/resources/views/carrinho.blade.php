<script>
  function pagar(){
    return alert("Compra realizada com sucesso!");
  }
</script>

@extends('layout')

@section('conteudo')
<br>

@if(!empty($mensagem))
<div class="alert alert-success mt-2">
    {{ $mensagem }}
</div>
@endif

<div class="container">
  <div class="row">
    <h3>Produtos no carrinho</h3> <br>
  
@forelse($pedidos as $pedido)
<br>

<br>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pedido</th>
      <th scope="col">Imagem</th>
      <th scope="col">Produto</th>
      <th scope="col">Valor</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>


@php
  $total_pedido = 0;
 @endphp
      

  @foreach($pedido->pedido_produtos as $pedido_produto)

    <tr>
      <th scope="row">{{ $pedido->id }}</th>
      <td><img width='100px' height="100px" src="{{ asset('uploads/todosProdutos/' . $pedido_produto->produto->image1) }}" alt=""></td>
      <td>{{ $pedido_produto->produto->name }}</td>
      <td>{{ number_format($pedido_produto->produto->price, 2, ',' , '.') }}</td>
      <td> <button onclick="return carrinhoRemoverProduto( {{ $pedido->id }} , {{ $pedido_produto->products_id }}, 0)" 
      class="tooltipped btn btn-danger" data-position="right"> Retirar Produto</button></td>

      @php
        $total_produto = $pedido_produto->valores;
      
        $total_pedido += $total_produto;
     @endphp
  
       
    </tr>
    
 @endforeach   

  </tbody>


</table>
 <div class="row"> 
         <strong class="col offset-16 offset-m6 offset-s6  14 m4 s4 right-align"> Total do pedido: </strong> 
         <span class="col 12 m2 s2" >
            R$: {{ number_format($total_pedido, 2, ',' , '.') }} 
         </span> 
 </div> 

 <button id="btComprar" onclick="alert('Compra realizada com sucesso!')" class="btn btn-success">COMPRAR</button>

@empty

<h5>Não há produtos</h5>

@endforelse

  </div>
</div>


<form action="{{ route('carrinho.remover') }}" id="form-remover-produto" method="POST">
  {{ csrf_field() }}
  {{method_field('DELETE') }}
  <input type="hidden" name="pedido_id">
  <input type="hidden" name="products_id">
  <input type="hidden" name="item">
</form>

<form action="{{ route('carrinho.adicionar') }}" method="POST" id="form-adicionar-produto">
  {{ csrf_field() }}
  <input type="hidden" name="id">
</form>

<script>
  function carrinhoRemoverProduto(idPedido, idProduto, item){
    $('#form-remover-produto input[name="pedido_id"]').val(idPedido);
    $('#form-remover-produto input[name="products_id"]').val(idProduto);
    $('#form-remover-produto input[name="item"]').val(item);
    $('#form-remover-produto').submit();
}

function carrinhoAdicionarProduto(idProduto){
    $('#form-adicionar-produto input[name="id"]').val(idProduto);
    $('#form-adicionar-produto').submit();
}
</script>
@endsection
