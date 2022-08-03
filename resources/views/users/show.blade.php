@extends('template.users')
@section('title', '$title')
@section('body')


<table class="table">
    <thead class="table-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Data Cadastro</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody class="text-dark">
        <tr>
            <th scope="row">{{ $users->id }}</th>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ date('d/m/Y - H:i', strtotime($users->created_at)) }}</td>
            <td>
            @if (Auth::user()->is_admin == 1)
                <a href="{{ route('users.edit', $users->id) }}" class="btn btn-outline-dark">Editar</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-outline-dark">Deletar</button>  
                </form>
            </td>
            @endif
        </tr>
    </tbody>
</table>
@endsection