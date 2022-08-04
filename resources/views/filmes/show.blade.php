@extends('template.users')
@section('title', '$title')
@section('body')

<h1>Editar Filmes</h1>
    <table class="table">
      <thead class="table-center" >
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME DO FILME</th>
            <th scope="col">DURAÇÃO</th>
            <th scope="col">GÊNERO</th>
            <th scope="col">CLASSIFICAÇÃO</th>
            <th scope="col">LINGUAGEM</th>
            <th scope="col">SINOPSE</th>
            <th scope="col">DATA DE LANÇAMENTO</th>
            <th scope="col">PLATAFORMAS</th>
            <th scope="col">DIREÇÃO</th>
            <th scope="col">PRÊMIO</th>
            <th scope="col" colspan="2">AÇOÊS</th>
        </tr>
      </thead>
    <tbody class="text-dark">
        <tr>
            <th scope="row">{{ $filmes->id }}</th>
            <td>{{ $filmes->nome_do_filme }}</td>
            <td>{{ $filmes->duracao }}</td>
            <td>{{ $filmes->genero }}</td>
            <td>{{ $filmes->classificacao}}</td>
            <td>{{ $filmes->linguagem}}</td>
            <td>{{ $filmes->sinopse}}</td>
            <td>{{ date('d/m/y', strtotime($filmes->created_at)) }}</td>
            <td>{{ $filmes->plataformas}}</td>
            <td>{{ $filmes->direcao}}</td>
            <td>{{ $filmes->premio}}</td>
            <td>
            @if (Auth::user()->is_admin == 1)
              <a href="{{ route('filmes.edit', $filmes->id ) }}" class="btn btn-outline-dark">Editar</a>
            </td>
            <td>
                <form action="{{ route('filmes.destroy', $filmes->id) }}" method="POST">
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