<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Cadastar Produto </title>
</head>
<body>
    
<div class="container">

<h2>Cadastre seu Produto</h2>

    <form action="{{ route('addImagem') }}" method="POST" enctype="multipart/form-data" >
    @csrf
        <div class="form-group">
            <input type="text" name="nome" placeholder="Nome" class="form-control" >
        </div>

        <div class="form-group">
            <input type="text" name="preço" placeholder="preço" class="form-control" >
        </div>

        <div class="form-group">
            <input type="text" name="descricao" placeholder="Descrição" class="form-control" >
        </div>

        <div class="form-group">
            <input type="file" name="imagem" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>

    </form>

</div>

</body>
</html>