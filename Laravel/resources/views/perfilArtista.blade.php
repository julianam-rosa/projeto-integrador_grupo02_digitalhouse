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
                <img class="rounded-circle" src="/img/user.png" width="80%">
            </a>

            <!-- descrição -->

            <div id="editar" class="col-4">
                <a href="editUser/{{$usuario->id}}" class="btn btn-primary">Editar Informações</a>
            </div>

            <div class="row ml-auto mr-auto">
                <table class="table col-12">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Imagem</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Valor</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produtos as $produto)

                        <tr>
                            <td> <a href="/detalheProduto/{{$produto->id}}">
                                    <img src="{{ asset('uploads/todosProdutos/' . $produto->image1) }}" class="card-img-top"
                                        alt="..." width="200px" height="200px"> </a></td>
                            <td>{{ $produto->name }}</td>
                            <td>{{ $produto->price }}</td>
                            <td><a href="destroy/{{$produto->id}}" class="btn btn-danger">Deletar</a></td>
                            <td><a href="edit/{{$produto->id}}" class="btn btn-warning">Editar</a></td>

                        </tr>

                        @endforeach
                    </tbody>

                </table>

            </div>

        </div>
        
            <br>
            <div class="row d-flex justify-content-center">
                {{$produtos->links()}}
            </div>
           
    </div>

    <br><br><br>


    @endsection