<!-- Agora vou usar a estrutura do template inicial-->
@extends('templates.templateini')

@section('content')
<div class="card">
    <div class="card-header">Teste</div>
    <div class="card-body">
        Importação de template.

        <!-- incluindo o formulario -->
        @include('teste.forminclude')
    </div>
</div>
@endsection
