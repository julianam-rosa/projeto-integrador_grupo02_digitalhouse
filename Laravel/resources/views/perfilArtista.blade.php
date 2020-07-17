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





        </div>
    </div>

    <br><br><br>


    @endsection