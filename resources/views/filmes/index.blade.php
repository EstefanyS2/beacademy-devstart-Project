@extends('template.filmes')
@section('title', 'Listagem de Filmes')
@section('body')

<h1>Listagem de Filmes</h1>
  <div class="container">
    <table class="text-center">
        <tr>
            <th scope="col">Foto</th>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">DURAÇÃO</th>
            <th scope="col">GENÊRO</th>
            <th scope="col">CLASSIFICAÇÃO</th>
            <th scope="col">LINGUAGEM</th>
            <th scope="col">SINOPSE</th>
        </tr>
    </table>
    <tbody>
        @foreach($filmes as $filme)
        <tr>
            <th scope="row">{{ $filme->id }}</th>
            <td>{{ $filme->name }}</td>
            <td>{{ $filme->duração }}</td>
            <td>{{ $filme->genêro }}</td>
            <td>{{ $filme->Classificação}}</td>
            <td>{{ $filme->linguagem}}</td>
            <td>{{ $filme->sinopse}}</td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </div>
</table>
@endsection