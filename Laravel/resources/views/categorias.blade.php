<title>Veduta | {{$categorias->name}}</title>

@extends('layout')

@section('conteudo')

    <div class="container">

        <div class="espaco-branco">        
            <h2 id="titulo-categorias">{{$categorias->name}}</h2>
        </div>

        


        <main class="produtos-venda">
            <div class="row">
            
               @foreach ($produtos as $produto)
                <div class="card col-4" style="width: 18rem;">
                    <a href="/detalheProduto/{{$produto->id}}">
                    <img src="{{ asset('uploads/todosProdutos/' . $produto->image1) }}">
                    </a>
                    <div class="card-body">
                        <span><strong>{{$produto->name}}</strong></span><br>
                        <span>{{$produto->description}}</span><br>
                        <span class="valor"><strong>R$</strong></span>
                        <span class="valor">{{$produto->price}}</span>              
                    </div>
                </div>
                @endforeach
                
            </div>
            
            <br>
            <div class="row d-flex justify-content-center">
            {{$produtos->links()}}
            </div>

        </main>
        

    </div>
    









@endsection
