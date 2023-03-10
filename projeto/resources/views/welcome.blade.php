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
                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#viewMoreVacancy{{$vacancy->id}}"><i class="fa-solid fa-eye"></i> Ver mais</a>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL VIEW MORE -->
    <div class="modal fade" id="viewMoreVacancy{{$vacancy->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body card m-3 p-3">
                    <div class="col text-center mb-3">
                        <h5><strong>{{$vacancy->title}}</strong></h5>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h6><strong>Local: </strong>{{$vacancy->local}}</h6>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h6><strong>Nível: </strong>{{$vacancy->level}}</h6>
                        </div>
                        <div class="col">
                            <h6><strong>Tipo: </strong>{{$vacancy->type}}</h6>
                        </div>
                    </div>
                    <h6><strong>Habilidades exigidas: </strong></h6>
                    <div class="row">
                        @foreach($vacancy->skills as $skills)
                            <div class="col-sm-3">
                                <div class="card mb-2 pt-2">
                                    <div class="card-body skill">
                                        <h6>{{$skills}}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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