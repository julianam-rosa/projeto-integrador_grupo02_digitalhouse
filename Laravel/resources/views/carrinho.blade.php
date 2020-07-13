
@extends('layout')

@section('conteudo')
<br>

<div class="container">
  <div class="row">
    <h3>Produtos no carrinho</h3> <br>
  
@forelse($pedidos as $pedido)
<br>
<h5 class="col 2 s12 m6">Criado em: {{ $pedido->created_at->format('d/m/y H:i') }} </h5>
<br>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Pedido</th>
      <th scope="col">Imagem</th>
      <th scope="col">Produto</th>
      <th scope="col">Valor</th>
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
      <!-- <td> <a href="" class="tooltipped" data-position="right" data-delay="50" data-tooltip="Retirar produto do carrinho?" > Retirar Produto</a></td> -->
    </tr>
    @endforeach
  </tbody>
</table>

@php

  $total_produto = $pedido_produto->valores;

  $total_pedido += $total_produto;

@endphp

<div class="row">
        <strong class="col offset-16 offset-m6 offset-s6  14 m4 s4 right-align"> Total do pedido: </strong>
        <span class="col 12 m2 s2" >
            R$: {{ number_format($total_pedido, 2, ',' , '.') }}
        </span>
        </div>
@empty

<h5>Não há produtos</h5>

@endforelse
  </div>
</div>



@endsection
