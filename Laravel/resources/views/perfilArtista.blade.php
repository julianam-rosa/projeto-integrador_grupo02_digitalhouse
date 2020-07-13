<title>Veduta | Perfil</title>

@extends('layout')

@section('conteudo')

<main>

<<<<<<< HEAD

=======
    <br><br><br><br><br><br>
>>>>>>> 55c1124a05913ebcc9947e1d914475ad82ef579c

    <!-- foto de capa -->
    <div id="capa-perfil"></div>

    <!-- abrindo um container para colocar a foto de perfil e a descrição -->
    <div class="container">
        <div class="row">

<<<<<<< HEAD
    <a class="col-3 i navbar-brand" href="#">
      <img class="rounded-circle" src="/img/canecas/caneca-7.jpg" width="80%">
    </a>

=======
            <a class="col-3 i navbar-brand" href="#">
                <img class="rounded-circle" src="/img/Ellipse_16.png" width="80%">
                <button class="btn btn-primary"><i class="fas fa-plus"></i> Seguir</button>
                <button class="btn btn-danger"><i class="fas fa-donate"></i> Doar</button>
            </a>

            <!-- descrição -->

            <div id="descricaou" class="col-7 rounded">
>>>>>>> 55c1124a05913ebcc9947e1d914475ad82ef579c

            </div>

<<<<<<< HEAD
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
=======
>>>>>>> 55c1124a05913ebcc9947e1d914475ad82ef579c

            <div>
                <h3 id="tema-per">Produtos</h3>
            </div>
            @foreach($produtos as $produto)
            <div id="pr" class="card col-3">
                <a href="/detalheProduto/{{$produto->id}}">
                    <img src="{{ asset('uploads/todosProdutos/' . $produto->image1) }}" class="card-img-top" alt="..."
                        width="250px">
                </a>

                <div class="card-body">
                    <span class="valor"><strong>R$</strong></span><span class="valor">{{ $produto->price }}</span>

                    <span>{{ $produto->name }}</span>
                    <span>{{ $produto->description }}</span>
                    <a href="destroy/{{$produto->id}}" class="btn btn-danger"> Deletar</a>
                </div>
            </div>

            @endforeach

        </div>
    </div>

    <br><br><br>

<<<<<<< HEAD
@endsection 


<!-- <form method="POST" action=" {{ route('carrinho.adicionar') }}"> -->
  <!-- {{ csrf_field() }} -->
  <!-- <input type="hidden" name="id" value="{{ registro->id }}"> -->
  <!-- <button class="btn-large col 16 m6 s6 green accent-4 tooltipped" data-position="button" data-delaney="50" data-tooltip=" O produto será adicionado ao seu carrinho">Comprar</button> -->


<!-- </form> -->
=======
    @endsection
>>>>>>> 55c1124a05913ebcc9947e1d914475ad82ef579c
