@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<h1>Listagem de Usuários</h1>
<div class="container">
<div class="row">
    <div class="col-sm mt-2 mb-5">
        <a href="{{ route('users.create') }}" class="btn btn-outline-dark">Novo Usuário</a>
    </div> 
    <div class="col-sm mt-2 mb-5">
        <form action="{{ route('users.index') }}" method="GET">
            <div class="input-group">
                <input type="search" class="form-control rounder" name="search"/>
                <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
            </div>
        </form>
      </div>
    </div>
</div>
<table class="table-dark">
    <thead class="text-center">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone"</th>
            
            <th></th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ date('d/m/y - H:i', strtotime($user->created_at)) }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary text-white">Visualizar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection