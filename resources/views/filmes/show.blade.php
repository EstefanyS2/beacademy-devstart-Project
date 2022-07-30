@extends('template.filmes')
@section('title', '$title')
@section('body')

<h1>Editar Filmes</h1>
    <table class="table table-hover">
      <thead class="text center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">DURAÇÃO</th>
            <th scope="col">GÊNERO</th>
            <th scope="col">CLASSIFICAÇÃO</th>
            <th scope="col">LINGUAGEM</th>
            <th scope="col">SINOPSE</th>
            <th scope="col">LANÇAMENTO</th>
            <th scope="col">PLATAFORMAS</th>
            <th scope="col">DIREÇÃO</th>
            <th scope="col">PRÊMIO</th>
            <th scope="col" colspan="2">AÇOÊS</th>
        </tr>
      </thead>
    <tbody class="text-center">
        <tr>
            <th scope="row">{{ $filmes->id }}</th>
            <td>{{ $filmes->name }}</td>
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
              <a href="{{ route('filmes.edit', $filmes->id ) }}" class="btn btn-sm btn-outline-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('filmes.destroy', $filmes->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-sm btn-outline-primary">Deletar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection