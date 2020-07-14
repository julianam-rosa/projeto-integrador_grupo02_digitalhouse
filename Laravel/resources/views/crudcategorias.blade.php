@extends('layoutHome')

@section('conteudo')

@if(!empty($mensagem))
<div class="alert alert-success mt-2">
    {{ $mensagem }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger mt-2">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container" class="text-center">
    <br><br>
    <form action="/crudCategorias" class="formulario" method="post">
        @csrf
        <label for="nome">Cadastrar Categoria:</label>
        <input type="text" name="name" id="name" placeholder="Nome da Categoria" required>

        <button type="submit" class="btn btn-success">Cadastrar</button>
        <br><br>
        <br><br>

    </form>

    <div class="col-8 m-auto">
        <table class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th sope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)


                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->name}}</td>
                    <td><a href="destroi/{{$categoria->id}}"><button class="btn btn-danger">
                                Deletar</button></a>
                    <td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>




    @endsection