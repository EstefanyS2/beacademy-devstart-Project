@extends('template.users')
@section('title', 'home')
@section('body')


<div class="row row-cols-1 row-cols-md-3 g-4 p-3" style="width: 100%">
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/Através da Minha Janela.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Através da Minha Janela</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/Amizade Colorida.webp') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Amizade Colorida</h5>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/A mentira.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">A mentira</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/A garota do Trem.jpg') }}"class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">A Torre Negra</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/Daughter of God.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Daughter of God</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('fotos/O Último Caçador de Bruxas.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">O Último Caçador de Bruxas</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('fotos/O Dote Perfeito.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">O Dote Perfeito</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('fotos/searching.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Searchimg</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('fotos/Um Pequeno Favor.webp ') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Um Pequeno Favor</h5>
        <p class="card-text">Stephanie é uma mãe solitária que se torna amiga de Emily,
           uma mulher poderosa e destemida. Um dia, Emily desaparece e Stephanie parte em busca de respostas por conta própria,
           mas no caminho descobre que a nova amiga não era nada do que ela pensava.</p>
      </div>
    </div>
  </div>
</div>
@endsection