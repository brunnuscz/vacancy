@extends('layouts.main')
@section('title', 'Vaga: '. $vacancy->title)
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Vaga</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-vacancies-container">
    <div class="card m-3 p-3">
        <div class="p-3">
            <div class="col mb-3">
                <h5><strong>Título: </strong>{{$vacancy->title}}</h5>
            </div>
            <div class="col mb-3">
                <h5><strong>Criador: </strong>{{$creator['name']}}</h5>
            </div>
            <div class="row mt-4 mb-3">
                <div class="col-3">
                    <h5><strong>Nível: </strong>{{$vacancy->level}}</h5>
                </div>
                <div class="col-3">
                    <h5><strong>Tipo: </strong>{{$vacancy->type}}</h5>
                </div>
                <div class="col">
                    <h5><strong>Local: </strong>{{$vacancy->local}}</h5>
                </div>
            </div>
            <div class="text-skills">
                <span><strong>Habilidades exigidas: </strong></span>
                @foreach($vacancy->skills as $skill)
                    @if($loop->index+1 == count($vacancy->skills))
                        <span>{{$skill}}.</span>
                    @else
                        <span>{{$skill}}, </span>
                    @endif
                @endforeach
            </div>
        </div>

        <h2 class="text-center mb-4"><strong>Candidatos que atedem aos requesitos da vaga</strong></h2>
        <div class="card m-3 p-3">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">#</th>
                        <th class="text-center" scope="col">Nome</th>
                        <th class="text-center" scope="col">Habilidades</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidates as $candidate)
                        <tr>
                            <td class="text-center" scropt="row">{{$loop->index+1}}</td>
                            <td class="text-center" >{{$candidate->name}}</td>
                            <td class="text-center">
                                @foreach($candidate->skills as $skill)
                                    @if($loop->index+1 == count($candidate->skills))
                                        <span>{{$skill}}</span>
                                    @else
                                        <span>{{$skill}}, </span>
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection