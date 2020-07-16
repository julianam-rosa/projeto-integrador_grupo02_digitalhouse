<title>Veduta | Perfil</title>

@extends('layout')

@section('conteudo')

<main>

<<<<<<< HEAD
=======




>>>>>>> 28aac91e3992a3f5febd19728be65c4f522beddd
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


<<<<<<< HEAD
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
=======
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Imagem</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Valor</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)

                    <tr>
                        <td> <a href="/detalheProduto/{{$produto->id}}">
                                <img src="{{ asset('uploads/todosProdutos/' . $produto->image1) }}" class="card-img-top"
                                    alt="..." width=50% height=50%> </a></td>
                        <td>{{ $produto->name }}</td>
                        <td>{{ $produto->price }}</td>
                        <td><a href="destroy/{{$produto->id}}" class="btn btn-danger"> Deletar</a></td>

                    </tr>

                    @endforeach
                </tbody>


            </table>



>>>>>>> 28aac91e3992a3f5febd19728be65c4f522beddd


        </div>
    </div>

    <br><br><br>


    @endsection