
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SAE</title>
    <meta name="Sistema de Assistência ao Estudante" content="">
    <meta name="Nataly Nazario Quina" content="">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

<!-- Styles -->
<style>
  html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }



            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a nav {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container{
                position: absolute;
                right: 10px;
                top: 18px;
            }
        </style>
    </head>
    <body>
    @section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/small-business.css" rel="stylesheet">

    <!-- Navigation -->
    <nav >
         <ul >
            <li >
              <a class="navbar" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Como Funciona</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Perguntas frequentes</a>
            </li>
          </ul>
    </nav>
<header>
 <!-- Page Content -->
 <div class="container">
    <img class="" src="logo_SAE_colorida.jpg" alt="logo_SAE" height="50px">
    <h1>SAE:</h1>
    <p>Um sistema para os estudantes!</p>
    <a class="" href="#">Por onde começar?!</a>

</div>
</header>
</body>
</html>


@extends('templates.templateini')


<div class="jumbotron text-white bg-dark">
   <div class="row">
    <div class="col-md-4 px-0">
      <h1 class="font-italic">Sobre o Programa:</h1>
      <p class="">O Programa de Assistência Estudantil (PAE) do IFC tem por objetivo criar condições de acesso e aproveitamento pleno da formação acadêmica aos estudantes em situação de vulnerabilidade socioeconômica, por meio da concessão de auxílios estudantis.</p>

      <h2 class="font-italic">Sobre o Sistema:</h1>
      <p class="">O Sistema de Assistência ao Estudante tem por objetivo conceder acesso à informações, solicitações e avisos, para o estudante que solicita o auxílio estudantil. Assim como também disponibiliza um espaço para que o mesmo possa manter seus dados atualizados junto a assistência social do campus.</p>

      <p class=""><a href="#" class="text-white font-weight-bold">Continue lendo...</a></p>
    </div>
    <div class="col-md-2 px-0">
            Últimos Editais
    </div>
    <div class="col-md-2 px-0">
            Resultados Parciais e Finais
    </div>
    <div class="col-md-2 px-0">
            Chamadas e Lista de Espera
    </div>
    <div class="col-md-2 px-0">
            <form class="form-inline mt-2 mt-md-0">
             <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
            </form>
    </div>
</div>
</div>


