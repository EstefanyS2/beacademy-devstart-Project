@extends('template.users')
@section('title', '$title')
@section('body')


<table class="table">
    <thead class="table-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>  
            <th scope="col">Editar</th>
            <th scope="col">Deletar</th>
        </tr>
    </thead>
    <tbody class="text-dark">
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $users->id }}</th>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>
            @if (Auth::user()->is_admin == 1)
                <a href="{{ route('users.edit', $users->id) }}" class="btn btn-outline-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-outline-danger">Deletar</button>  
                </form>
            </td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
@endsection