@extends('template.users')
@section('title', "filmes {{$filmes->name}}")
@section('body')

<h1>Editar Filmes</h1>
<br>

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif

<form action="{{ route('filmes.update', $filmes->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome do Filme</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="name">
    </div>
    <div class="mb-3">
        <label for="duracao" class="form-label">Duração</label>
        <input type="text" class="form-control" id="duracao" name="duracao">
    <div class="mb-3">
            <label for="classificacao" class="form-label">Classificação</label>
            <input type="text" class="form-control" id="classificacao" name="classificacao">
        </div>
        <div class="mb-3">
            <label for="sinopse" class="form-label">Sinopse</label>
            <input type="text" class="form-control" id="sinopse" name="sinopse">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Selecione uma imagem</label>
            <input type="file" class="form-control form-control-sm" id="image" name="image">
        </div>
    <button type="submit" class="btn btn-success btn-sm">Atualizar</button>
</form>
@endsection