@extends('template.filmes')
@section('title', 'Novo Filme')
@section('body')

<h1>Novo Filme</h1>

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach($errors->all() as $error)
             {{ $error }} <br>
        @endforeach
    </div>   
@endif
   <form action="{{ route('filmes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome do Filme</label>
            <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
        </div>
        <div class="mb-3">
            <label for="duracao" class="form-label">Duração</label>
            <input type="text" class="form-control" id="duracao" name="duracao">
        </div>
        <div class="mb-3">
            <label for="genero" class="form-label">Gênero</label>
            <input type="text" class="form-control" id="genero" name="genero">
        </div>
        <div class="mb-3">
            <label for="classificacao" class="form-label">Classificação</label>
            <input type="text" class="form-control" id="classificacao" name="classificacao">
        </div>
        <div class="mb-3">
            <label for="linguagem" class="form-label">Linguagem</label>
            <input type="text" class="form-control" id="linguagem" name="linguagem">
        </div>
        <div class="mb-3">
            <label for="sinopse" class="form-label">Sinopse</label>
            <textarea type="text" class="form-control" id="sinopse" name="sinopse" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <label for="dtbirth" class="form-label">Data de Lançamento</label>
            <input type="date" class="form-control" id="dtbirth" name="Data_de_Lancamento">
        </div>
        <div class="mb-3">
            <label for="sinopse" class="form-label">Plataformas</label>
            <input type="text" class="form-control" id="plataformas" name="plataformas">
        </div>
        <div class="mb-3">
            <label for="sinopse" class="form-label">Direção</label>
            <input type="text" class="form-control" id="direcao" name="direcao">
        </div>
        <div class="mb-3">
            <label for="sinopse" class="form-label">Prêmio</label>
            <input type="text" class="form-control" id="premio" name="premio">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Selecione uma imagem</label>
            <input type="file" class="form-control form-control-sm" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-success mt-3">Enviar</button>
   </form>
@endsection