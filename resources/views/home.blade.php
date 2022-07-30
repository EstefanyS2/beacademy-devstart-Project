@extends('template.users')
@section('title', 'home')
@section('body')


<div class="row row-cols-1 row-cols-md-3 g-4 p-3">
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('storage/profile/Através da Minha Janela.jpg') }}" class="card-img-top" alt="..." width="18" height="">
      <div class="card-body">
        <h5 class="card-title text-center">Através da Minha Janela</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('storage/profile/Amizade Colorida.webp') }}" class="card-img-top" alt="..." width="18rem">
      <div class="card-body">
        <h5 class="card-title text-center">Amizade Colorida</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('storage/profile/A mentira.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">A mentira</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('storage/profile/A Garota do Trem.jpg') }}"class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">A Torre Negra</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('storage/profile/Daughter of God.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Daughter of God</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('storage/profile/O Último Caçador de Bruxas.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">O Último Caçador de Bruxas</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('storage/profile/O Dote Perfeito.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">O Dote Perfeito</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('storage/profile/searching.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Searchimg</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('storage/profile/Um Pequeno Favor.webp') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Um Pequeno Favor</h5>
        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</div>
@endsection