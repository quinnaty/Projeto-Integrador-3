@extends('templates.master')
<!-- Modificar: Perguntas Frequentes -->

@section('content')
<div class="col-md-12">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-4 shadow">
                <div class="card-header">

                    Postagens de teste

                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modalExemplo">
                        <i class="fa fa-plus"></i> Nova postagem
                    </button>
                </div>
                <div class="card-body">
                    @foreach($postagens as $postagem)

                        <h5><b>Titulo: </b></h5> {{ $postagem->titulo }}
                        <br><br>
                        <h5><b>Conteúdo: </b></h5> <br>
                        <p>{{ $postagem->conteudo }}</p>
                        <a href="{{ route('deleta-postagem', $postagem->id) }}" class="btn float-right">
                            <i class="fa fa-trash text-danger "></i>
                        </a>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de postagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('cadastra-postagem') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Titulo</label>
                <input type="text" name="titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Conteudo</label>
                <textarea name="conteudo" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Cadastrar</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
