@extends('layoutHome')

@section('conteudo')

<br>
<div class="container">

    <div class="col-12">
        <div class="slider-principal">
            <a href="/perfil"><img class="img-banner" src="./img/carrossel1 (1).png" /></a>
            <a href="/perfil"><img class="img-banner" src="./img/banner-01.png" /></a>
            <a href="/perfil"><img class="img-banner" src="./img/banner-02.png" /></a>
            <a href="/perfil"><img class="img-banner" src="./img/banner-04.png" /></a>
        </div>
    </div>

    <br>

    <div class="palavras col-12">
        <h2> Venda, compre e divulgue arte!</h2>
    </div>

    <br>

    <div class="row ">
        <div class="card col-4" style="width: 18rem;">
            <a href="/perfil">
                <img src="./img/obra-home1.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <span><strong>Obra: </strong></span><span>Gatos Dançarinos</span><br>
                <span><strong>Autor: </strong></span><span>Roberto Kato</span>

            </div>
        </div>

        <div class="card col-4" style="width: 18rem;">
            <a href="/perfil">
                <img src="./img/obras-home.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <span><strong>Obra: </strong></span><span>Vale Verde</span><br>
                <span><strong>Autor: </strong></span><span>Cecilia Dali</span>

            </div>
        </div>

        <div class="card col-4" style="width: 18rem;">
            <a href="/perfil">
                <img src="./img/obra-home2.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <span><strong>Obra: </strong></span><span>Nevado</span><br>
                <span><strong>Autor: </strong></span><span>Carlos Reis</span>

            </div>
        </div>
    </div>
</div>

<br><br><br>

<div class="container">
    <div class="row slider-baixo">
        <div class="slider-secundario">
            <a href="/categorias/1"><img class="img-banner" src="./imgCategorias/almofadas.png" /></a>
            <a href="/categorias/2"><img class="img-banner" src="./imgCategorias/bolsas.png" /></a>
            <a href="/categorias/3"><img class="img-banner" src="./imgCategorias/cadernos.png" /></a>
            <a href="/categorias/4"><img class="img-banner" src="./imgCategorias/camisetas.png" /></a>
            <a href="/categorias/5"><img class="img-banner" src="./imgCategorias/canecas.png" /></a>
            <a href="/categorias/6"><img class="img-banner" src="./imgCategorias/cartoes.png" /></a>
            <a href="/categorias/7"><img class="img-banner" src="./imgCategorias/cases.png" /></a>
            <a href="/categorias/8"><img class="img-banner" src="./imgCategorias/chinelos.png" /></a>
            <a href="/categorias/9"><img class="img-banner" src="./imgCategorias/leggings.png" /></a>
            <a href="/categorias/10"><img class="img-banner" src="./imgCategorias/magnetos.png" /></a>
            <a href="/categorias/11"><img class="img-banner" src="./imgCategorias/meias.png" /></a>
            <a href="/categorias/12"><img class="img-banner" src="./imgCategorias/posters.png" /></a>
        </div>
    </div>
</div>

@endsection