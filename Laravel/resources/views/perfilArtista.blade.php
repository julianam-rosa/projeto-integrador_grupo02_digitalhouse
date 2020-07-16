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
                <img class="rounded-circle" src="/img/Ellipse_16.png" width="80%">
            </a>

            <!-- descrição -->

            <div id="editar" class="col-4">
                <a href="editUser/{{$usuario->id}}" class="btn btn-primary">Editar Informações</a>
            </div>

    
@foreach($produtos as $produto)
   

            <div>
                <h3 id="tema-per">Produtos</h3>
            </div>
          
            <div id="pr" class="card col-3">
                <a href="/detalheProduto/{{$produto->id}}">
                    <img src="{{ asset('uploads/todosProdutos/' . $produto->image1) }}" class="card-img-top" alt="..."
                        width="250px">
                </a>

                <div class="card-body">
                    <span class="valor"><strong>R$</strong></span><span class="valor">{{ $produto->price }}</span>

                    <span>{{ $produto->name }}</span>
                    <span>{{ $produto->description }}</span>
                    <a href="destroy/{{$produto->id}}" class="btn btn-danger">Deletar</a>
                    <a href="edit/{{$produto->id}}" class="btn btn-warning">Editar</a>
                </div>
            </div>

 @endforeach

        </div>
    </div>

    <br><br><br>


@endsection

