@extends('layoutHome')

@section('conteudo')


<div class="container">

    <label for="">Nome:</label>
    <input type="text" name="nome" id="nome" placeholder="Nome">

    <label for="">Preço:</label>
    <input type="number" name="preço" id="preço" placeholder="preço">

    <label for="">Descrição:</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>

    <label for="">Imagens:</label> <br>
    <input type="file" name="imagem1" id="imagem1"> <br>
    <input type="file" name="imagem2" id="imagem2"> <br>
    <input type="file" name="imagem3" id="imagem3"> <br><br>

    <select name="categoria" id="categotia">
        <option value="">Categoria</option>
        <option value="almofadas">Almofadas</option>
        <option value="bolsas">Bolsas</option>
        <option value="cadernos">Cadernos</option>
        <option value="camisetas">Camisetas</option>
        <option value="cartões-postais">Cartão Postal</option>
        <option value="cases">Cases</option>
        <option value="chinelos">Chinelos</option>
        <option value="leggins">Leggins</option>
        <option value="magnetos">Magnetos</option>
        <option value="meias">Meias</option>
        <option value="posters">Posters</option>
    </select>

    <br><br>

    <button type="submit" class="btn btn-success">Cadastrar</button>
    <br><br>












</div>


@endsection