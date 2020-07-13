<title>Veduta | Perfil</title>

@extends('layout')

@section('conteudo')

<main>



    <!-- foto de capa -->
<div id="capa-perfil"></div>

<!-- abrindo um container para colocar a foto de perfil e a descrição -->
<div class="container">
  <div class="row">

    <a class="col-3 i navbar-brand" href="#">
      <img class="rounded-circle" src="/img/canecas/caneca-7.jpg" width="80%">
    </a>



    <div>
      <h3 id="tema-per">Produtos</h3>
    </div>
@foreach($produtos as $produto)
    <div id="pr" class="card col-3">
      <a href="perfil-artista.html">
        <img src="{{ asset('uploads/todosProdutos/' . $produto->image1) }}" class="card-img-top" alt="..." width="250px">
      </a>

      <div class="card-body">
            <span class="valor"><strong>R$</strong></span><span class="valor">{{ $produto->price }}</span>
         
            <span>{{ $produto->name }}</span>
      
      </div>
    </div>

@endforeach

  </div>
</div>

<br><br><br>

@endsection 


<!-- <form method="POST" action=" {{ route('carrinho.adicionar') }}"> -->
  {{ csrf_field() }}
  <input type="hidden" name="id" value="{{ registro->id }}">
  <button class="btn-large col 16 m6 s6 green accent-4 tooltipped" data-position="button" data-delaney="50" data-tooltip=" O produto será adicionado ao seu carrinho">Comprar</button>


<!-- </form> -->
