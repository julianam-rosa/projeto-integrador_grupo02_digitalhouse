<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Lista de Produtos</title>
    
</head>
<body>
    
<div class="container">  
    <h1>Exibindo os produtos</h1>
    <button class="btn btn-primary"><a href="cadastrarProduto">cadastrar</a></button>
    <br>

    <hr>

    <form action="procurarProdutos" class="form form-inline">
    @csrf
        <input type="text" name="filter" placeholder="Pesquisar" class="form-control">
        <button type="submit" class="btn btn-info">Pesquisar</button>
    </form>

<table class="table table-striped">
    <thead>
        <th>Imagem</th>
        <th>Nome</th>
        <th>Preço</th>
    <th width="100" >Ações</th>
        <th>Edit</th>
    </thead>
    <tbody>
@foreach($todosProdutos ?? '' as $todosProduto)




            <tr>
                
              
                <td><img src="{{ asset('uploads/todosProdutos/' . $todosProduto->imagem) }}" alt="" width="115px" height="100px"></td>
                <td>{{ $todosProduto->nome }}</td>
                <td>{{ $todosProduto->preço }}</td>
                <td>
                    <a href="detalhesProdutos/{{$todosProduto->id}}"> Detalhes </a> 
                    <a href="deletarProdutos/{{$todosProduto->id}}" class="btn btn-danger"> Deletar</a>
                </td>
                <td><a href="editarImagem/{{$todosProduto->id}}" class="btn btn-success">Editar</a></td>
            </tr>
@endforeach
    </tbody>
</table>
{{ $todosProdutos ?? ''->links() }}


</div>

</body>
</html>