<nav class="navbar shadow navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">SAE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('site-principal') }}">Principal</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('contatos') }}" class="nav-link">Contatos</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('teste-principal') }}" class="nav-link">Perguntas Frequentes</a>
      </li>
    </ul>
  </div>
</nav>
