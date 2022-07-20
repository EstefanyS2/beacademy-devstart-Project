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
        <div class="col-md-6">
            <label for="inputName4" class="form-label">Nome</label>
            <input type="name" class="form-control" id="inputName4" name="name" aria-describedby="Nome">
        </div>
        <div class="col-mb-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" id="inputEmail4" name="email">
        </div>    
        <div class="col-12">
            <label for="dtbirth" class="form-label">Data de Nascimento</label>
            <input type="date" class="form-control" id="dtbirth" name="dtbirth">
        </div>
        <div class="col-mb-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf">
        </div>
        <div class="col-mb-6">
            <label for="rg" class="form-label">RG</label>
            <input type="text" class="form-control" id="rg" name="rg">
        </div>
        <div class="col-mb-6">
            <label for="phone" class="form-label">Telefone</label>
            <input type="phone" class="form-control" id="phone" name="phone">
        </div>  
        <div class="col-mb-6">
            <label for="endereço" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>   
        <div class="col-mb-6">
            <label for="inputCidade" class="form-label">Cidade</label>
            <input type="cidade" class="form-control" id="inputCidade">
        </div>   
        <div class="col-mb-6">
            <label for="inputEstado" class="form-label">Estado</label>
            <input type="estado" class="form-control" id="inputEstado">
        </div>   
        <div class="col-mb-6">
            <label for="type" class="form-label">Tipo</label>
            <select class="form-select"  arial-label="Default select example" id="type" name="type">
                <option selected>Escolha o tipo do usuário</option>
                <option value="0">Comum</option>
                <option value="1">Admin</option>
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
             <button type="submit" class="btn btn-outline-primary">Concluir Cadastro</button>
        </form>
@endsection        