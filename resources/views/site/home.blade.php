@extends('template.filmes')
@section('title', 'Listagem de Filmes')
@section('body')



<main>
  <div class="row">
  <div class="col-sm-6">
    <div class="card1">
      <img class="rounded-4" src="{{ asset('storage/profile/Amizade Colorida.webp') }}" alt="dash">
      <div class="p-6 flex flex-col justify-start">
        <h5 class="text-gray-700 text-xl font-medium mb-1">Amizade Colorida</h5>
        <p class="text-gray-700 text-base mb-1">Jamie é uma recrutadora em Nova York que convence Dylan, um diretor de arte de 
          Los Angeles, a aceitar um emprego na revista GQ,
           em Manhattan. Os dois descobrem que têm muito em comum e se tornam amigos.</p>
        <a href="{{ route('filmes.index')}}" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6"> <!--flex justify-rigth para bai-->
    <div class="card2">
    <img class="rounded-4"  src="{{ asset('storage/profile/Através da Minha Janela.jpg') }}" alt="dash">
      <div class="card-body">
        <h5 class="card-title">Através da Minha Janela</h5>
        <p class="text-gray-700 text-base mb-4">Raquel é apaixonada pelo seu vizinho, Ares, um rapaz frio que 
          vive em um mundo completamente diferente do seu. Porém,
          o acaso acaba unindo os dois, que se veem envolvidos em uma trama de desejo e amor.</p>
        <a href="#" class="btn btn-primary">Visitar</a>
      </div>
    </div>
  </div>
</div>
</main>
<style>
.card1 img {
  width: 300px;
  text-align: center;
  padding: 10px 0px;
}
  
.card2 img {
  position: absolute;
  text-align: center;
    left: 35%;
    width: 300px;
    padding: 10px 0px;
}

</style>


<!--div class="flex justify-bteween itens-center pt-3 pb-2">
<div id="card2" class="card" style="width: 300px; ">
    <img src="{{ asset('storage/profile/Amizade Colorida.webp') }}" class="card-img-top" alt="Dash">
    <div class="col-18">
        <h5 class="card-title">Amizade Colorida</h5>
        <p class="card-text">Jamie é uma recrutadora em Nova York que convence Dylan,
         um diretor de arte de Los Angeles, a aceitar um emprego na revista GQ, em Manhattan.
        Os dois descobrem que têm muito em comum e se tornam amigos.</p>
        <a href="{{ route('filmes.index')}}" class="m-auto px-4 py-2 bg-neutral-900 hover:bg-amber-600 text-center text-sm text-white rounded duration-300"">Visitar</a>
    </div>
</div>
</div>
@endsection