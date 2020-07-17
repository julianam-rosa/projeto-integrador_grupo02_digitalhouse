let campoNome = document.querySelector('input[name="nome"]');
let campoEmail = document.querySelector('input[name="email"]');
let campoEstado = document.querySelector('select[name="estado"]');
let formulario = document.querySelector('.formulario');
fetch('http://servicodados.ibge.gov.br/api/v1/localidades/estados')
    .then(function(response){
        if(response.ok){
            return response.json();
        }else{
            throw Error('Ocorreu um erro na requisição!');
        }
    })
    .then(function(dados){
        for(estado of dados){
            let option = document.createElement('option');
            let optionText = document.createTextNode(estado.nome);
            option.append(optionText);
            campoEstado.append(option);
        }
    })
    .catch(function(erro){
        console.log(erro);
    });