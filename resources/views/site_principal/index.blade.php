@extends('templates.master') <!-- Importando o master -->

@section('content')

<div class="container-fluid bg-dark text-white font-italic">
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron p-0 p-md-2 text-white rounded bg-dark">
                <div class="col-md-8 px-0">
                  <h1 class="display-6 font-italic">
                    Sistema de Assistência <br>ao Estudante </h1>
                </div>
            </div>
        </div>
        <div class="col-md-3">
                <a href="{{route ('editais')}}">
                <strong class="d-inline-block mb-2 text-white" >
                    Último Edital
                </strong>
                    <p>Confira aqui o último edital lançado.</p>
                <br>
                </a>
                <a href="{{route ('contemplados')}}">
                <strong class="d-inline-block mb-2 text-white" >
                    Resultados Parciais e Finais
                </strong>
                <p>Confira aqui os resultados parcial ou final do último edital.</p>
            </a>
        </div>
        <div class="col-md-3">
            <a href="{{route ('listaespera')}}" target="_self">
            <strong class="d-inline-block mb-2 text-white">
                Chamadas: Lista de Espera
            </strong>
            <p>Confira aqui a chamada da lista de espera.</p>
            </a>
            <br>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Ir</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6" >
        Sobre o Programa: <br><br>
           O Programa de Assistência Estudantil (PAE) do IFC tem por objetivo criar condições de acesso e aproveitamento pleno da formação acadêmica aos estudantes em situação de vulnerabilidade socioeconômica, por meio da concessão de auxílios estudantis.
        <br><br>
        Sobre o Sistema:<br><br>
           O Sistema de Assistência ao Estudante tem por objetivo conceder acesso à informações, solicitações e avisos, para o estudante que solicita o auxílio estudantil. Assim como também disponibiliza um espaço para que o mesmo possa manter seus dados atualizados junto a assistência social do campus.
        </div>
    </div>
    <br>
<div class="row">
    Como Funciona? <br> <br>
    <img src="imagens/infograficosae.jpg" class="img-fluid" alt="Imagem responsiva">

</div>


</div>




@endsection

