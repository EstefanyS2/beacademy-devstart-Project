@extends('template.users')
@section('title', 'Editar Produto')
@section('body')


@if($errors->any())
<div class="alert alert-successs" role="alert">
    @foreach($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
</div>

@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome da Produto</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="Name">
    </div>
    <div>
        <label for="brand" class="form-label">Marca</label>
        <input type="text" class="form-control" id="brand" name="brand">
    </div>
    <div>
        <label for="category" class="form-label">Categoria</label>
        <input type="text" class="form-control" id="category" name="category">
    </div>
    <div>
        <label for="description" class="form-label">Descrição</label>
        <input type="text" class="form-control" id="description" name="description">
    </div>
    <div>
        <label for="anufacturingm" class="Fabricação">Fabricação</label>
        <input type="text" class="form-control" id="anufacturingm" name="anufacturingm">
    </div>
    <div>
        <label for="dtbirth" class="Fabricação">Validade</label>
        <input type="date" class="form-control" id="dtbirth" name="dtbirth">
    </div>
    <div>
        <label for="quantity" class="form-label">Quantidade</label>
        <input type="text" class="form-control" id="quantity" name="quantity">
    </div>
    <div>
        <label for="price" class="form-label">Preço</label>
        <input type="text" class="form-control" id="price" name="price">
    </div>
    <div>
        <label for="saleprice" class="form-label">Preço de Venda</label>
        <input type="text" class="form-control" id="saleprice" name="saleprice">
    </div>
    <div>
        <label for="image" class="form-label">Selecione uma imagem</label>
        <input type="file" class="form-control" id="image" name="image" />
    </div>
    <button type="submit" class="btn btn-sm btn-outline-primary mt-4">Atualizar</button>
</form>
@endsection