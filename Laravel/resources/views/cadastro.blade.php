<title>Veduta | Cadastro</title>
<script type="text/javascript">
function validar_form_cadastro() {
var celular = formcadastro.celular.value.length;
var telefone = formcadastro.telefone.value.length;
var senha = formcadastro.senha.value.length;

if (celular != 11) {
    alert("Celular deve ter 11 dígitos");
    formcadastro.celular.focus()
    return false;
}
if (telefone != 10) {
    alert("Telefone deve ter 10 dígitos");
    formcadastro.telefone.focus()
    return false;

}

if (senha < 8) {
    alert("Senha deve ter no mínimo 8 dígitos");
    formcadastro.senha.focus()
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

<div class="branco">
    <div class="paizao-cinza">
        <div class="cinza">
            <h3>Cadastre-se</h3>
        </div>
    </div>
    <div class="campos-preencher"> PREENCHER TODOS OS CAMPOS COM (*), POIS SÃO OBRIGATÓRIOS.</div>

</div>

<div class="info">
    <h4 class="titulo">Informações Pessoais</h4>
</div>

<div class="container d-flex">
    <form name="formcadastro" class="formulario" method="post">
        @csrf

        <div class="flex nome-completo">
            <div class="field">
                <label for="nome"> Nome(*)</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="field">
                <label for="sobrenome">Sobrenome(*)</label>
                <input type="text" id="sobrenome" name="sobrenome" placeholder="Digite seu sobrenome" required>
            </div>
        </div>


        <div class="flex sexo-idade">
            <div class="field radiobox">
                <span>sexo(*)</span>
                <input type="radio" name="sex" value="male"> Masculino
                <input type="radio" name="sex" value="female"> Feminino
                <input type="radio" name="sex" value="outros"> Outros
            </div>
            <div class="field">
                <label for="nascimento">data de Nascimento(*)</label>
                <input type="date" id="dataNascimento" name="dataNascimento"
                    placeholder="Digite sua data de nascimento" required>
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
                <input type="tel" id="celular" name="celular" placeholder="Digite seu celular" required>
            </div>
        </div>
        <div class="endereco">
            <h4 class="titulo">endereço</h4>
        </div>
        <div class="flex dado-endereco">
            <div class="field">
                <label for="">Estado</label>
                <select name="estado" id="estado"
                class="form-control">

        </select>

                
            </div>

            <div class="field">
                <label for="cidade">cidade(*)</label>
                <input type="text" id="cidade" name="cidade" placeholder="Digite sua cidade" required>
            </div>

        </div>
        <div class="flex dado-endereco">
            <div class="field">
                <label for="cep">cep(*)</label>
                <input type="number" id="cep" name="cep" placeholder="Digite seu CEP sem - e ." required>
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
                <label for="numero">Nº(*)</label>
                <input type="number" id="numero" name="numero" placeholder="Nº" required>
            </div>
            <div class="field-enderoco3">
                <label for="complemento">complemento</label>
                <input type="text" id="complemento" name="complemento" placeholder="Complemento">
            </div>
        </div>
        <div class="acesso">
            <h4 class="titulo">acesso</h4>
        </div>
        <div class="flex acesso-email">
            <div class="field">
                <label for="email">e-mail(*)</label>
                <input type="email" id="email" name="email" placeholder="Digite seu email" required>
            </div>

            <div class="field">
                <label for="email_confirmation">confirme o e-mail(*)</label>
                <input type="email" id="email_confirmation" name="email_confirmation"
                    placeholder="Confirme seu email" required>
            </div>
        </div>
        <div class="flex acesso-senha">
            <div class="field">
                <label for="senha">senha(*)</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
            </div>

            <div class="field">
                <label for="senha_confirmation">Confirme a senha(*)</label>
                <input type="password" id="senha_confirmation" name="senha_confirmation"
                    placeholder="Confirme sua senha" required>
            </div>
        </div>
        <div class="notificacoes">
            <div class="noti-quad">
                <div class="field-termo">
                    <input type="checkbox" id="termos" name="termos" required>
                    <label for="scales">LI E ACEITO OS TERMOS E CONDIÇÕES</label required>
                </div>

                <div class="field-termo">
                    <input type="checkbox" id="newsletter" name="newsletter">
                    <label for="horns">ACEITO RECEBER NOTIFICAÇÕES DE PROMOÇÃO EM MEU E-MAIL</label>
                </div>
            </div>
        </div>

        <div class="flex cad-canc">
            <button type="submit" onclick="return validar_form_cadastro()" class="cadastrar">cadastrar</button>
            <button type="reset" class="cancelar">cancelar</button>
        </div>
    </form>

</div>

<script src="{{ asset('js/cadastro.js')}}" href=""></script>
@endsection