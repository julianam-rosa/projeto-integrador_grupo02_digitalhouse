@extends('layoutHome')

@section('conteudo')

<div class="container">


    <h1> {{$produtos->name}} </h1>

    <ul>
        <li><strong>Nome:</strong> {{$produtos->name}}</li>
        <li><strong>Preço:</strong> {{$produtos->price}}</li>
        <li><strong>Descrição:</strong> {{$produtos->description}}</li>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <img src="{{ asset('uploads/todosProdutos/' . $produtos->image1) }}"
                            class="" alt="..." width="225px">
                </div>
                
                @if(!empty($produtos->image2))
                <div class="col-sm">
                    <img src="{{ asset('uploads/todosProdutos/' . $produtos->image2) }}"
                            class="" alt="..." width="225px">
                </div>
                @endif

                @if(!empty($produtos->image3))
                <div class=" col-sm">
                    <img src="{{ asset('uploads/todosProdutos/' . $produtos->image3) }}"
                            class="" alt="..." width="225px">
                </div>
                @endif
            </div>
    </ul>

    <br>

    <form method="POST" action=" {{ route('carrinho.adicionar') }}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $produtos->id }}">
        <button class="btn btn-success tooltipped" data-position="button" data-delaney="50"
            data-tooltip=" O produto será adicionado ao seu carrinho">Comprar</button>
    </form>
    <br>

</div>



@endsection