@extends('template.filmes')
@section('title', '$title')
@section('body')

<h1>Filmes {{ $filme->name }}</h1>
    <table class="text-center">
      <thead>
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
            <th scope="col">AÇOÊS</th>
        </tr>
      </thead>
    <tbody class="text-center">
        <tr>
            <th scope="row">{{ $filme->id }}</th>
            <td>{{ $filme->name }}</td>
            <td>{{ $filme->duracao }}</td>
            <td>{{ $filme->genero }}</td>
            <td>{{ $filme->classificacao}}</td>
            <td>{{ $filme->linguagem}}</td>
            <td>{{ $filme->sinopse}}</td>
            <td>{{ $filme->plataformas}}</td>
            <td>{{ $filme->direcao}}</td>
            <td>{{ $filme->premio}}</td>
            <td>{{ date('d/m/y - H:i', strtotime($filme->created_at)) }}</td>
            <td>
              <a href="{{ route('filmes.show', $filme->id ) }}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('filmes.destroy', $filme->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                <button type="submit" class="btn btn-sm btn-outline-primary">Deletar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection