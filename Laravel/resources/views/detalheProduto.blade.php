@extends('layoutHome')

@section('conteudo')

<div class="container">


    <h1> {{$produtos->name}} </h1>

    <ul>
        <li><strong>Nome:</strong> {{$produtos->name}}</li>
        <li><strong>Preço:</strong> {{$produtos->price}}</li>
        <li><strong>Descrição:</strong> {{$produtos->description}}</li>
        <li><strong>Imagem:</strong> <img src="{{ asset('uploads/todosProdutos/' . $produtos->image1) }}"
                class="card-img-top" alt="..." width="250px"></li>
        <li><strong>Imagem:</strong> <img src="{{ asset('uploads/todosProdutos/' . $produtos->image2) }}"
                class="card-img-top" alt="..." width="250px"></li>
        <li><strong>Imagem:</strong> <img src="{{ asset('uploads/todosProdutos/' . $produtos->image3) }}"
                class="card-img-top" alt="..." width="250px"></li>
    </ul>


</div>



@endsection