@extends('layout')

@section('conteudo')

<div class="container">

  <div class="espaco-branco">
      <div class="traco"></div>
      <h2 id="titulo-almofada">Camisetas</h2>
  </div>

  <main class="produtos-venda">
    <div class="row">

        <div class="card col-4" style="width: 18rem;">
            <a href="/perfil">
              <img src="../img/camisetas/camisa-2.jpg" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <span class="autor"><strong></strong></span><span>Guilherme</span><br>
              <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-3.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-4.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-5.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-5.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-5.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-8.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-8.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <div class="card col-4" style="width: 18rem;">
        <a href="/perfil">
          <img src="../img/camisetas/camisa-8.jpg" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
          <span class="autor"><strong></strong></span><span>Guilherme</span><br>
          <span class="valor"><strong>R$</strong></span><span class="valor">20,99</span>
        </div>
      </div>

      <br><br>

      <div class="flex trocar-pagina">
        <div class="flex todas-paginas">
          <div class="flex paginas-seta"><button class="seta-l"></button></div>
          <div class="flex paginas">1</div>
          <div class="flex paginas">2</div>
          <div class="flex paginas">3</div>
          <div class="flex paginas">4</div>
          <div class="flex paginas">5</div>
          <div class="flex paginas-seta"><button class="seta-r"></button></div>
        </div>
      </div>

    </div>
  </main>

</div>

@endsection
