<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css')}}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css')}}">
        <title>Veduta</title>
        <link rel="icon" href="./img/logo_veduta-sem-letras.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-dark">
                <div class="container">

                    <a class="navbar-brand" href="/home">
                        <img src="../img/logo_colorido.png" width="100">
                    </a>

                    @auth
                    <a class="navbar-brand text-white" href="/perfil"><i class="fas fa-user"></i> Perfil</a>
                    @endauth
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link navbar-brand text-white" href="/home">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            @guest
                            <li class="nav-item">
                                <a class="nav-link navbar-brand text-white" href="{{ route('mylogin')}}">Login</a>
                            </li>
                            @endguest

                            @auth
                            <li>
                                <a class="nav-link navbar-brand text-white" href="/cadastroProduto">Vender</a>
                            </li>
                            @endauth

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle navbar-brand text-white" href="#" id="navbarDropdown"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Categorias
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($categorias as $categoria)
                                    <a class="dropdown-item"
                                        href="/categorias/{{$categoria->id}}">{{ $categoria->name }}</a>

                                    @endforeach

                                </div>
                            </li>

                        </ul>

                        <form action="procurarProdutos" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i
                                    class="fas fa-search"></i></button>
                        </form>

                        <a class="btn btn-dark" href="#"><i class="fas fa-shopping-bag"></i></a>
                    </div>
                </div>
                @if( auth()->check() )
                <li class="nav-item">
                    <a class="nav-link font-weight-bold" href="#">Hi {{ auth()->user()->name }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Log Out</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/login">Log In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cadastro">Register</a>
                </li>
                @endif
            </nav>
        </header>
    </body>









    @yield('conteudo')

    <div class="pagination justify-content-center" style="margin-left:auto;margin-right:auto" ;>
        <a href="#">&laquo;</a>
        <a href="#" class="active">1</a>
        <a href="#">2</a>
        <a href="#">3</a>
        <a href="#">4</a>
        <a href="#">5</a>
        <a href="#">6</a>
        <a href="#">7</a>
        <a href="#">8</a>
        <a href="#">9</a>
        <a href="#">&raquo;</a>
    </div>


    <footer>
        <div class="footer">
            <div class="flex grupo-footer ">
                <div class="sobre">
                    <h3>Sobre Nós</h3>

                    <div class="termos">
                        <h3><a href="{{ route('termos')}}">Termos e privacidade</a></h3>
                    </div>
                </div>
                <div class="social">
                    <h3>Redes Sociais</h3>
                    <div class="flex mg_top">
                        <div class="face">
                            <a href="https://www.facebook.com/"> <img id="facebook" src="../img/facebook.png"></a>
                        </div>
                        <div class="twitter">
                            <a href="https://twitter.com/login?lang=pt"><img id="twitter" src="../img/twitter.png"></a>
                        </div>
                        <div class="insta">
                            <a href="https://www.instagram.com/?hl=pt-br"><img id="insta"
                                    src="../img/instagram.png"></a>
                        </div>
                    </div>

                </div>
                <div class="ajuda">
                    <h3>Ajuda</h3>
                    <h3><a href="">Trocas e Devoluções</a></h3>

                </div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script type="text/javascript" src="../js/jquery-migrate.js/"></script>
    <script type="text/javascript" src="../js/slick.min.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
    </body>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>

</html>