@extends('template.users')
@section('title', 'Novo Usuário')
@section('body')


<h1>Novo Usuário</h1>

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif

<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="name" class="form-control" id="name" name="name" aria-describedby="Nome">
    </div>
    <div class="mb-3">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4" name="email">
    </div>
    <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select" aria-label="Default select example" id="type" name="type">
                <option selected>Escolha o tipo do usuário</option>
                <option value="1">Admin</option>
                <option value="2">Comum</option>
            </select>
        </div>
    <div class="mb-3">
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Confirme sua senha</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Selecione uma imagem</label>
        <input type="file" class="form-control form-control-sm" id="image" name="image" />
    </div>
    <button type="submit" class="btn btn-outline-primary">Enviar</button>
</form>
@endsection