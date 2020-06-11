@extends('layout')

@section('conteudo')

<body>

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
        <form class="formulario" method="post">
            <div class="flex nome-completo">
                <div class="field">
                    <label for="nome"> Nome(*)</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
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

    @endsection
