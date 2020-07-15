<script type="text/javascript">
function validar_form_cadastroProduto() {
    var nome = formcadastroProduto.nome.value;
    var preço = formcadastroProduto.preço.value;

    if (nome == "") {
        alert("Campo nome é obrigatório");
        formcadastro.nome.focus()
        return false;
    }
    if (preço == "") {
        alert("Campo preço é obrigatório");
        formcadastro.preço.focus()
        return false;

    }
}
</script>

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

<div class="container">

    <form name="formcadastroProduto" action="/update/{{$produtos->id}}" class="formulario" method="POST"
        enctype="multipart/form-data">

        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Nome" value="{{$produtos->name}}" required>

        <label for="preço">Preço:</label>
        <input type="text" name="preço" id="preço" placeholder="Preço" value="{{$produtos->price}}" required>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" cols="30" rows="10" placeholder="Descrição"></textarea>

        <label for="imagens">Imagens:</label> <br>
        <input type="file" name="imagem1" id="imagem1" value="{{$produtos->image1}}" required> <br>
        <input type="file" name="imagem2" id="imagem2" value="{{$produtos->image2}}"> <br>
        <input type="file" name="imagem3" id="imagem3" value="{{$produtos->image3}}"> <br><br>

        <select name="categoria" id="categoria" required>
            @foreach($categorias as $categoria)
            
            @if($categoria->id != $produtos->category_id)
            <option value="{{ $categoria->id }}"> {{ $categoria->name }} </option>
            @else
            <option value="{{ $categoria->id }}" selected> {{ $categoria->name }} </option>
            @endif

            @endforeach
        </select>

        <br><br>

        <button type="submit" onclick="return validar_form_cadastroProduto()" class="btn btn-success">Salvar</button>
        <br><br>

    </form>

</div>

<script>
    document.getElementById("descricao").value = "{{$produtos->description}}";    
</script>

@endsection