@extends('template.users')
@section('title', 'Listagem de Usuários')
@section('body')

<h1> Listagem de Produtos</h1>
        @if(session()->has('create'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Atenção!</strong> {{ session()->get('create') }}.
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                   <strong>Atenção!</strong> {{ session()->get('edit') }}.
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if(session()->has('destroy'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                   <strong>Atenção!</strong> {{ session()->get('destroy') }}.
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="container">
            <div class="row">
                  <div class="col-sm mt-2 mb-5">
                   <a href="{{ route('products.create') }}" class="btn btn-outline-dark"> Novo Produto</a>
                  </div>
                  <div class="col-sm mt-2 mb-5">
                        <form action="{{ route('products.index') }}" method="GET">
                          <div class="input-group">
                              <input type="search" class="form-control rounded" name="search" />
                              <button type="submit" class="btn btn-outline-dark">Pesquisar</button>
                        </div>
                        </form>
                  </div>
            </div>
      </div> 

<table class="table">
  <thead class="table-light">
   <tr>
    <th scope="col">#</th>
    <th scope="col">IMAGEM</th>
    <th scope="col">PRODUTO</th>
    <th scope="col">MARCA</th>
    <th scope="col">CATEGORIA</th>
    <th scope="col">DESCRICAO</th>
    <th scope="col">FABRICACAO</th>
    <th scope="col">VALIDADE</th>
    <th scope="col">QUANTIDADE</th>
    <th scope="col">PRECO</th>
    <th scope="col">PRECO DE VENDA</th>
    <th scope="col" colspan="2">ACOES</th>
   </tr>
  </thead>
  <tbody>
    @foreach($products as $product)
     <tr>
     <th scope="row">{{ $product->id }}</th>
     <figure class="figure">
            <th><img class="figure-img img-fluid rounded" src="{{ asset('storage/' . $product->image) }}" width="80" alt="..."></th>
            <figcaption class="figure-caption"></figcaption>
        <td>{{ $product->name }}</td>
        <td>{{ $product->brand }}</td>
        <td>{{ $product->category }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->anufacturingm }}</td>
        <td>{{ date('d/m/Y - H:i', strtotime($product->created_at)) }}</td>
        <td>{{ $product->quantity }}</td>
        <td>R$ {{ $product->price }}</td>
        <td>R$ {{ $product->saleprice }}</td>
        <td>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-outline-primary">Visualizar</a>
        </td>
     </tr>
     @endforeach
  </tbody>
</table>
@endsection 