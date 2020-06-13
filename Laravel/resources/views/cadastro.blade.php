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

              <a class="navbar-brand text-white" href="/perfil"><i class="fas fa-user"></i> Perfil</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                    <a class="nav-link navbar-brand text-white" href="/home">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link navbar-brand text-white" href="/login">Login</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle navbar-brand text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Categorias
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('categoria-almofadas')}}">Almofadas</a>
                      <a class="dropdown-item" href="{{ route('categoria-bolsas')}}">Bolsas</a>
                      <a class="dropdown-item" href="{{ route('categoria-cadernos')}}">Cadernos</a>
                      <a class="dropdown-item" href="{{ route('categoria-camisetas')}}">Camisetas</a>
                      <a class="dropdown-item" href="{{ route('categoria-canecas')}}">Canecas</a>
                      <a class="dropdown-item" href="{{ route('categoria-cartoes')}}">Cartões postais</a>
                      <a class="dropdown-item" href="{{ route('categoria-cases')}}">Cases</a>
                      <a class="dropdown-item" href="{{ route('categoria-chinelos')}}">Chinelos</a>
                      <a class="dropdown-item" href="{{ route('categoria-leggins')}}">Leggings</a>
                      <a class="dropdown-item" href="{{ route('categoria-magnetos')}}">Magnetos</a>
                      <a class="dropdown-item" href="{{ route('categoria-meias')}}">Meias</a>
                      <a class="dropdown-item" href="{{ route('categoria-posters')}}">Posters</a>

                    </div>
                  </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <a class="btn btn-dark" href="#"><i class="fas fa-shopping-bag"></i></a>
              </div>
          </div>
            </nav>
      </header>

    <div class="branco">
        <div class="paizao-cinza">
            <div class="cinza">
                <h3>Cadastre-se</h3>
            </div>
        </div>
        <div class="campos-preencher"> PREENCHER TODOS OS CAMPOS COM (*), POIS SÃO OBRIGATÓRIOS.</div>

        </div>
        <h5>Você pode se cadastrar usando informações de sua contas de redes socias, email ou preencher os campos abaixo:</h5>


        <div class="">
            <div class="botao-face">
                <button class="btn"><img id="fa" src="./img/Botão Facebook.png"></button>
            </div>
            <div class="botao-gmail">
                <button class="btn"><img id="cad-google" src="./img/Botão Gmail.png"></button>
            </div>
        </div>


        <div class="info">
            <h4 class="titulo">Informações Pessoais</h4>
        </div>

    <div class="container">   
        <form class="formulario" method="post">

        
            <div class="flex nome-completo">
                <div class="field">
                    <label for="nome"> Nome(*)</label>
                    <input type="text"  id="nome" name="nome" placeholder="Digite seu nome" required>
                </div>

                <div class="field">
                    <label for="sobrenome">Sobrenome(*)</label>
                    <input type="text" id="Sobrenome" name="Sobrenome" placeholder="Digite seu sobrenome" required>
                </div>
            </div>

        
            <div class="flex sexo-idade">
                <div class="field radiobox">
                    <span>sexo(*)</span>
                    <form>
                        <input type="radio" name="sex" value="male"> Masculino
                        <input type="radio" name="sex" value="female"> Feminino
                        <input type="radio" name="sex" value="outros"> Outros
                    </form>
                </div>
                <div class="field">
                    <label for="nascimento">data de Nascimento(*)</label>
                    <input type="date" id="nascimento" name="nascimento" placeholder="Digite sua data de nascimento" required>
                </div>
            </div>
            <div class="cpf">
                <div class="field">
                    <label for="cpf">CPF(*)</label>
                    <input type="number" id="cpf" name="cpf" placeholder="Digite seu CPF" required>
                </div>
            </div>
            <div class="contato">
                <h4 class="titulo">contatos</h4>
            </div>
            <div class="flex telefone">
                <div class="field">
                    <label for="telefone">telefone</label>
                    <input type="tel" id="telefone" name="telefone" placeholder="Digite seu telefone" required>
                </div>
                <div class="field">
                    <label for="celular">celular(*)</label>
                    <input type="tel" id="celular" name="celular" placeholder="Digite seu celulcar" required>
                </div>
            </div>
            <div class="endereco">
                <h4 class="titulo">endereço</h4>
            </div>
            <div class="flex dado-endereco">
                <div class="field">
                    <label for="estado">estado(*)</label>
                    <input type="text" id="estado" name="estado" placeholder="Digite seu estado" required>
                </div>

                <div class="field">
                    <label for="cidade">cidade(*)</label>
                    <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required>
                </div>

            </div>
            <div class="flex dado-endereco">
                <div class="field">
                    <label for="cep">cep(*)</label>
                    <input type="number" id="cep" name="cep" placeholder="Digite seu CEP" required>
                </div>

                <div class="field">
                    <label for="bairro">bairro(*)</label>
                    <input type="text" id="bairro" name="bairro" placeholder="Digite seu bairro" required>
                </div>
            </div>
            <div class="flex dado-endereco">
                <div class="field-enderoco1">
                    <label for="rua">rua(*)</label>
                    <input type="text" id="rua" name="rua" placeholder="Digite sua rua" required>
                </div>

                <div class="field-enderoco2">
                    <label for="Nº">Nº(*)</label>
                    <input type="number" id="Nº" name="Nº" placeholder="Nº" required>
                </div>
                <div class="field-enderoco3">
                    <label for="complemento">complemento</label>
                    <input type="text" id="complemento" name="complemento" placeholder="Complemento" required>
                </div>
            </div>
            <div class="acesso">
                <h4 class="titulo">acesso</h4>
            </div>
            <div class="flex acesso-email">
                <div class="field">
                    <label for="email">e-mail(*)</label>
                    <input type="email" id="email" name="nome" placeholder="Digite seu email" required>
                </div>

                <div class="field">
                    <label for="email">confirme o e-mail(*)</label>
                    <input type="email" id="email-confirme" name="Sobrenome" placeholder="confirme seu email" required>
                </div>
            </div>
            <div class="flex acesso-senha">
                <div class="field">
                    <label for="senha">senha(*)</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>

                <div class="field">
                    <label for="senha">confirme a senha(*)</label>
                    <input type="password" id="senha-confirme" name="senha" placeholder="confirme sua senha" required>
                </div>
            </div>
            <div class="notificacoes">
                <div class="noti-quad">
                    <div class="field-termo">
                        <input type="checkbox" id="scales" name="scales" required>
                        <label for="scales">LI E ACEITO OS TERMOS E CONDIÇÕES</label required>
                </div>

                <div class="field-termo">
                    <input type="checkbox" id="horns" name="horns">
                    <label for="horns">ACEITO RECEBER NOTIFICAÇÕES DE PROMOÇÃO EM MEU E-MAIL</label >
                </div>
            </div>
        </div>
        <div class="flex cad-canc">
            <button type="submit" class="cadastrar">cadastrar</button>
            <a href="home.html"><button type="submit" class="cancelar">cancelar</button></a>
        </div>
    </form>

    </div>

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
                              <a href="https://www.instagram.com/?hl=pt-br"><img id="insta" src="../img/instagram.png"></a>
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

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </html>

  
