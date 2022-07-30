@extends('template.users')
@section('title', '$title')
@section('body')

<table class="table">
    <thead class="table-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">PRODUTO</th>
            <th scope="col">MARCA</th>
            <th scope="col">CATEGORIA</th>
            <th scope="col">DESCRICAO</th>
            <th scope="col">FABRICACAO</th>
            <th scope="col">VALIDADE</th>
            <th scope="col">QUANTIDADE</th>
            <th scope="col">PRECO</th>
            <th scope="col">PRECO DE VENDA</th>
            <th scope="col"colspan="2">ACOES</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{ $products->id }}</th>
            <td>{{ $products->name }}</td>
            <td>{{ $products->brand }}</td>
            <td>{{ $products->category }}</td>
            <td>{{ $products->description }}</td>
            <td>{{ $products->anufacturingm }}</td>
            <td>{{ date('d/m/Y - H:i', strtotime($products->created_at)) }}</td>
            <td>{{ $products->quantity }}</td>
            <td>R$ {{ $products->price }}</td>
            <td>R$ {{ $products->saleprice }}</td>
            <td>
                <a href="{{ route('products.show', $products->id) }}" class="btn btn-sm btn-outline-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('products.destroy', $products->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-primary">Deletar</button>
                </form>
            </td>
        </tr>
    </tbody>
</table>
@endsection