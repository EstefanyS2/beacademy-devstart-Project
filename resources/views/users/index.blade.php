@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<h1>Listagem de Usuários</h1>
      @if(Auth::user()->is_admin == 1)
    <a href="{{ route('users.create') }}" class="btn btn-outline-dark">Novo Usuário</a>
    @endif
<table class="table">
    <thead class="table-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Foto</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>  
            <th scope="col">Data Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody class="text-dark">
        @foreach($users as $user)
        <tr>
        <th scope="row">{{ $user->id }}</th>
        @if($user->image)
        <th><img src=" {{ asset('fotos/'.$user->image) }}" width="50px" height="50px" class="rounded-circle" /></th>
        @else
        <th><img src=" {{ asset('fotos/Avatar.jpg') }}" width="50px" height="50px" class="rounded-circle" /></th>
        @endif
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ date('d/m/Y - H:i', strtotime($user->created_at)) }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-outline-dark">Visualizar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="justify-content-center pagination">
  {{ $users->links('pagination::bootstrap-4') }}
</div>
@endsection