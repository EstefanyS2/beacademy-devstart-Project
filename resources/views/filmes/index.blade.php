@extends('template.users')
@section('title', 'Listagem de Filmes')
@section('body')

<h1>Listagem de Filmes</h1>
    @if(Auth::user()->is_admin == 1)
      <a href="{{ route('filmes.create') }}" class="btn btn-success btn-sm mb-3">Adcionar Filmes</a>
    @endif
    <table class="table">
      <thead class="text-center">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">FOTO</th>
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
        @foreach($filmes as $filme)
        <tr>
            <th scope="row">{{ $filme->id }}</th>
            <figure class="figure">
            <th><img class="figure-img img-fluid rounded" src="{{ asset('storage/' . $filme->image) }}" alt="..."></th>
            <figcaption class="figure-caption"></figcaption>
            <td>{{ $filme->name }}</td>
            <td>{{ $filme->duracao }}</td>
            <td>{{ $filme->genero }}</td>
            <td>{{ $filme->classificacao}}</td>
            <td>{{ $filme->linguagem}}</td>
            <td>{{ $filme->sinopse}}</td>
            <td>{{ date('d/m/y - H:i', strtotime($filme->created_at)) }}</td>
            <td>{{ $filme->plataformas}}</td>
            <td>{{ $filme->direcao}}</td>
            <td>{{ $filme->premio}}</td>
            <td>
              <a href="{{ route('filmes.show', $filme->id ) }}" class="btn btn-primary">Visualizar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection