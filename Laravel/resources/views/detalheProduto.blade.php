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

    <form method="POST" action=" {{ route('carrinho.adicionar') }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $produtos->id }}">
        <button class="btn-large col 16 m6 s6 green accent-4 tooltipped" data-position="button" data-delaney="50"
            data-tooltip=" O produto será adicionado ao seu carrinho">Comprar</button>
    </form>


</div>



@endsection