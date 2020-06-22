@extends('layoutHome')

@section('conteudo')

<br>
<div class="container">

  <div class="col-12">
      <div class="slider-principal">
          <a href="/perfil"><img class="img-banner" src="./img/carrossel1 (1).png" /></a>
          <a href="/perfil"><img class="img-banner" src="./img/carrossel1 (1).png" /></a>
          <a href="/perfil"><img class="img-banner" src="./img/carrossel1 (1).png" /></a>
          <a href="/perfil"><img class="img-banner" src="./img/carrossel1 (1).png" /></a>
      </div>
  </div>

  <br>

  <div class="palavras col-12">
    <h2> Venda, compre e divulgue sua arte</h2>
  </div>

  <br>

    <div class="row ">
      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
        <img src="./img/obra-home1.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <span><strong>Obra:</strong></span><span>Por do sol</span><br>
            <span><strong>Autor:</strong></span><span>Roberto</span>

        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
        <img src="./img/obra-home1.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <span><strong>Obra:</strong></span><span>Por do sol</span><br>
            <span><strong>Autor:</strong></span><span>Roberto</span>

        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
        <img src="./img/obra-home1.png" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <span><strong>Obra: </strong></span><span>Por do sol</span><br>
            <span><strong>Autor: </strong></span><span>Roberto</span>

        </div>
      </div>
    </div>
</div>

<br><br><br>

<div class="container">
  <div class="row slider-baixo">
      <div class="slider-secundario">
          <a href="{{ route('categoria-almofadas')}}"><img class="img-banner" src="./imgCategorias/almofadas.png" /></a>
          <a href="{{ route('categoria-bolsas')}}"><img class="img-banner" src="./imgCategorias/bolsas.png" /></a>
          <a href="{{ route('categoria-cadernos')}}"><img class="img-banner" src="./imgCategorias/cadernos.png" /></a>
          <a href="{{ route('categoria-camisetas')}}"><img class="img-banner" src="./imgCategorias/camisetas.png" /></a>
          <a href="{{ route('categoria-canecas')}}"><img class="img-banner" src="./imgCategorias/canecas.png" /></a>
          <a href="{{ route('categoria-cartoes')}}"><img class="img-banner" src="./imgCategorias/cartoes.png" /></a>
          <a href="{{ route('categoria-cases')}}"><img class="img-banner" src="./imgCategorias/cases.png" /></a>
          <a href="{{ route('categoria-chinelos')}}"><img class="img-banner" src="./imgCategorias/chinelos.png" /></a>
          <a href="{{ route('categoria-leggins')}}"><img class="img-banner" src="./imgCategorias/leggings.png" /></a>
          <a href="{{ route('categoria-magnetos')}}"><img class="img-banner" src="./imgCategorias/magnetos.png" /></a>
          <a href="{{ route('categoria-meias')}}"><img class="img-banner" src="./imgCategorias/meias.png" /></a>
          <a href="{{ route('categoria-posters')}}"><img class="img-banner" src="./imgCategorias/posters.png" /></a>
      </div>
  </div>
</div>

@endsection
