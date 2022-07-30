@extends('template.users')
@section('title', '$title')
@section('body')


<table class="table">
    <thead class="table-center table-primary">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>  
            <th scope="col" colspan="2">Ações</th>
        </tr>
    </thead>
    <tbody class="text-dark">
        @foreach($users as $user)
        <tr>
            <th scope="row">{{ $users->id }}</th>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>
                <a href="{{ route('users.edit', $users->id) }}" class="btn btn-primary text-white">Editar</a>
            </td>
            <td>
                <form action="{{ route('users.destroy', $users->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                  <button type="submit" class="btn btn-sm btnoutline-primary">Deletar</button>  
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection