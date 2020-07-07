<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Detalhes</title>
</head>
<body>
    
<div class="container">


    <h1> {{$todosProdutos->nome}} </h1><a href="/listaProdutos"><<</a>

    <ul>
        <li><strong>Nome:</strong> {{$todosProdutos->nome}}</li>
        <li><strong>Preço:</strong> {{$todosProdutos->preço}}</li>
        <li><strong>Descrição:</strong> {{$todosProdutos->descricao}}</li>
        <li><strong>Imagem:</strong> {{$todosProdutos->imagem}}</li>
    </ul>

</div>

</body>
</html>