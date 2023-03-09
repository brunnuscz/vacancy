@extends('layouts.main')
@section('title', 'Página Inicial')
@section('content')

<div id="search-container">
    <h1>Pesquise por uma vaga</h1>
    <form action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Pesquisar...">
    </form>
</div>

<div class="title-vacancy col-md-12">
    <h2>Vagas disponíveis</h2>
</div>

<div id="vacancy-container">    
    <div id="cards-container" class="row">
        <div class="card col-md-3">
            <div class="card-body">
                <h5 class="card-title">Desenvolvedor Front-end</h5>
                <p class="card-info"><strong>Tipo da vaga: </strong>Remoto</p>
                <p class="card-info"><strong>Nível: </strong>Júnior</p>
                <p class="card-info"><strong>Local: </strong>Teresina</p>
                <div class="btn-ver-mais">
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Ver mais</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection