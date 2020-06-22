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
      <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi molestiae sapiente architecto pariatur dicta voluptates atque adipisci doloremque accusamus quisquam, modi nam, accusantium veritatis delectus nisi aliquam dolorum dolore ullam.
      </p>
  </div>

    <div>
      <h3 id="tema-per">Produtos</h3>
    </div>

    <div id="pr" class="card col-3">
      <a href="perfil-artista.html">
        <img src="./img/cadernos/caderno-3.jpg" class="card-img-top" alt="...">
      </a>

      <div class="card-body">
            <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
      </div>
    </div>

    <div id="prt" class="card col-3">
      <a href="perfil-artista.html">
        <img src="./img/cadernos/caderno-3.jpg" class="card-img-top" alt="...">
      </a>

      <div class="card-body">
        <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
      </div>
    </div>

    <div id="prtb" class="card col-3">
      <a href="perfil-artista.html">
        <img src="./img/cadernos/caderno-3.jpg" class="card-img-top" alt="...">
      </a>

      <div class="card-body">
        <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
      </div>
    </div>
  </div>
</div>

<br><br><br>

@endsection
