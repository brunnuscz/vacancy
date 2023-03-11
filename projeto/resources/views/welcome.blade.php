@extends('layouts.main')
@section('title', 'Página Inicial')
@section('content')

<div id="search-container">
    <h1>Pesquise por uma vaga</h1>
    <form action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar...">
    </form>
</div>

@if($search)
    <div class="title-vacancy col-md-12">
        <h2>Pesquisando por: {{$search}}</h2>     
    </div>
@else
    <div class="title-vacancy col-md-12">
        <h2>Vagas disponíveis</h2>
    </div>
@endif

<div class="row container-cards">
    @foreach($vacancies as $vacancy)
    <div class="col-4">
        <div class="card mb-4 card-vacancy">
            <div class="card-body">
                
                <h5 class="card-title">{{$vacancy->title}}</h5>
                <p class="card-info"><strong>Tipo da vaga: </strong>{{$vacancy->type}}</p>
                <p class="card-info"><strong>Nível: </strong>{{$vacancy->level}}</p>
                <p class="card-info"><strong>Local: </strong>{{$vacancy->local}}</p>
                <div class="btn-ver-mais">
                    <a class="btn btn-primary" href="/vacancy/show/{{$vacancy->id}}"><i class="fa-solid fa-eye"></i> Ver mais</a>
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
    @if(count($vacancies) == 0)
        <p>Não há nenhum vaga disponiveis...</p>
    @endif
</div>

@endsection