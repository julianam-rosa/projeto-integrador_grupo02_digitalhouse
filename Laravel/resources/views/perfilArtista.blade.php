@extends('layout')

@section('conteudo')

<main>

<br><br><br><br><br><br>

    <!-- foto de capa -->
<div id="capa-perfil"></div>

<!-- abrindo um container para colocar a foto de perfil e a descrição -->
<div class="container">
  <div class="row">

    <a class="col-3 i navbar-brand" href="#">
      <img class="rounded-circle" src="/img/canecas/caneca-7.jpg" width="80%">
      <button class="btn btn-primary"><i class="fas fa-plus"></i> Seguir</button>
      <button class="btn btn-danger"><i class="fas fa-donate"></i> Doar</button>
    </a>

<!-- descrição -->

    <div id="descricaou" class="col-7 rounded">
 
  </div>


    <div>
      <h3 id="tema-per">Produtos</h3>
    </div>
@foreach($produtos as $produto)
    <div id="pr" class="card col-3">
      <a href="perfil-artista.html">
        <img src="{{ asset('uploads/todosProdutos/') . $produto->imagem1 }}" class="card-img-top" alt="..." width="250px">
      </a>

      <div class="card-body">
            <span class="valor"><strong>R$</strong></span><span class="valor">{{ $produto->preço }}</span>
         
            <span>{{ $produto->nome }}</span>
            <span>{{ $produto->descricao }}</span>
      </div>
    </div>

@endforeach

  </div>
</div>

<br><br><br>

@endsection
