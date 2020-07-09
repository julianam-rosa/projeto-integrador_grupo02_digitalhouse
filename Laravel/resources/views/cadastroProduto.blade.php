@extends('layoutHome')

@section('conteudo')


<div class="container">

<form action="/cadastroProduto" class="formulario" method="POST" enctype="multipart/form-data">

@csrf
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome">

    <label for="preço">Preço:</label>
    <input type="text" name="preço" id="preço" placeholder="preço">

    <label for="descricao">Descrição:</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>

    <label for="imagens">Imagens:</label> <br>
    <input type="file" name="imagem1" id="imagem1"> <br>
    <input type="file" name="imagem2" id="imagem2"> <br>
    <input type="file" name="imagem3" id="imagem3"> <br><br>
    
    <select name="categoria" id="categoria">
    @foreach($categorias as $categoria)
    
        <option value="{{ $categoria->id }}"> {{ $categoria->name }} </option>
        
    @endforeach
    </select>
        
        
        
        <br><br>
        
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <br><br>
    
</form>










</div>


@endsection