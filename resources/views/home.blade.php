@extends('template.users')
@section('title', 'home')
@section('body')


<div class="row row-cols-1 row-cols-md-3 g-4 p-3" style="width: 100%">
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/Através da Minha Janela.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Através da Minha Janela</h5>
        <p class="card-text">Raquel é apaixonada pelo seu vizinho, Ares, um rapaz frio que vive em um mundo completamente diferente do seu. Porém, o acaso acaba unindo os dois, que se veem envolvidos em uma trama de desejo e amor.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/Amizade Colorida.webp') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Amizade Colorida</h5>
        <p class="card-text">Jamie é uma recrutadora em Nova York que convence Dylan, um diretor de arte de Los Angeles, a aceitar um emprego na revista GQ, em Manhattan. Os dois descobrem que têm muito em comum e se tornam amigos.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/A mentira.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">A mentira</h5>
        <p class="card-text">Estimulada pela popular melhor amiga a revelar detalhes de seu fim de semana entediante, Olive, uma adolescente certinha, decide apimentar um pouco os detalhes contando uma pequena mentira sobre a perda de sua virgindade. </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/A garota do Trem.jpg') }}"class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">A Torre Negra</h5>
        <p class="card-text">O pistoleiro Roland Deschain percorre o mundo em busca da famosa Torre Negra, prédio mágico que está prestes a desaparecer.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="{{ asset('fotos/Daughter of God.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Daughter of God</h5>
        <p class="card-text">O detetive Scott Galban busca a verdade sobre a misteriosa morte de seu parceiro. Enquanto isso, Isabel de la Cruz, uma mulher local que diz ter sido testemunha de um milagre, começa a vivenciar estranhos acontecimentos.</p>
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
        <h5 class="card-title text-center">O Date Perfeito</h5>
        <p class="card-text">Brooks cria um app oferecendo seus serviços de falso namorado para juntar dinheiro para a faculdade. Mas tudo se complica quando as coisas se tornam reais.</p>
      </div>
    </div>
  </div>
  <div class="col h-100">
    <div class="card">
      <img src="{{ asset('fotos/searching.jpg') }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Searchimg</h5>
        <p class="card-text">David Kim se desespera quando sua filha de 16 anos desaparece e as investigações policiais não levam a lugar nenhum. Decidido a descobrir o paradeiro da filha, ele usa o computador da menina para vasculhar suas fotos e vídeos em busca de pistas.</p>
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