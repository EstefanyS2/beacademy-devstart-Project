@extends('template.users')
@section('title', 'Editar Usuário')
@section('body')

@if($errors->any())
<div class="alert alert-danger" role="alert">
    @foreach($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>
@endif

<form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
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
        <label for="password" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Confirme sua senha</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-check mb-5">
          <input class="form-check-input" type="checkbox" id="admin" name="admin" value="1">
          <label class="form-check-label" for="admin">
            Administrador
          </label>
        </div>
    <button type="submit" class="btn btn-outline-primary">Atualizar</button>
</form>
@endsection