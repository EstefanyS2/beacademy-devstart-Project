@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<h1>Listagem de Usuários</h1>
<table class="table">
    <thead class="table-center">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>  
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody class="text-center">
        @foreach($users as $user)
        <tr>
        @if($user->image)
        <th><img src=" {{ asset('storage/'.$user->image) }}" width="50px" height="50px" class="rounded-circle" /></th>
        @else
        <th><img src=" {{ asset('storage/profile/Avatar.jpg.') }}" width="50px" height="50px" class="rounded-circle" /></th>
        @endif
            <th scope="row">{{ $user->id }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary text-white">Visualizar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
        </div>
        </div>
    </div>
</div>
</div>

@endsection