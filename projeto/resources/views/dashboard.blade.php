@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Vagas</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-vacancies-container">
    @if(count($vacancies) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Título</th>
                    <th class="text-center" scope="col">Local</th>
                    <th class="text-center" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td class="text-center" scropt="row">{{$loop->index+1}}</td>
                        <td class="text-center" >{{$vacancy->title}}</td>
                        <td class="text-center" >{{$vacancy->local}}</td>
                        <td class="btn-dashboard text-center">
                            <a class="btn btn-primary edit-btn" data-bs-toggle="modal" data-bs-target="#viewMoreVacancy{{$vacancy->id}}"><i class="fa-solid fa-eye"></i> Ver mais</a>
                            <a class="btn btn-danger edit-btn" data-bs-toggle="modal" data-bs-target="#deleteVacancy{{$vacancy->id}}"><i class="fa-solid fa-trash"></i> Deletar</a>
                            <a class="btn btn-info edit-btn" href="/vacancies/edit/{{$vacancy->id}}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                        </td>
                    </tr>

                    <!-- MODAL DELETE -->
                    <div class="modal fade" id="deleteVacancy{{$vacancy->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <h5>Tem certeza que deseja apagar esta vaga?</h5>
                                    </div>
                                    <form action="/vacancies/delete/{{$vacancy->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                                            <button type="submit" class="btn btn-primary">Sim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MODAL VIEW MORE -->
                    <div class="modal fade" id="viewMoreVacancy{{$vacancy->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body card m-3 p-3">
                                    <div class="col text-center mb-3">
                                        <h5><strong>{{$vacancy->title}}</strong></h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <h6><strong>Local: </strong>{{$vacancy->local}}</h6>
                                        </div>
                                        <div class="col-4">
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
                                                <div class="card mb-2 pt-1">
                                                    <div class="card-body skill">
                                                        <h6>{{$skills}}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <h5 class="text-center"><strong>Candidatos relacionados</strong></h5>
                                    <div class="card p-2 m-1">
                                        <h6><strong>Nome: </strong>Bruno cruz</h6>
                                        <h6><strong>Habilidades do candidato: </strong></h6>
                                        <div class="row">
                                            @foreach($vacancy->skills as $skills)
                                                <div class="col-sm-3">
                                                    <div class="card mb-2 pt-1">
                                                        <div class="card-body skill">
                                                            <h6>{{$skills}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card p-2 m-1">
                                        <h6><strong>Nome: </strong>Bruno cruz</h6>
                                        <h6><strong>Habilidades do candidato: </strong></h6>
                                        <div class="row">
                                            @foreach($vacancy->skills as $skills)
                                                <div class="col-sm-3">
                                                    <div class="card mb-2 pt-1">
                                                        <div class="card-body skill">
                                                            <h6>{{$skills}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card p-2 m-1">
                                        <h6><strong>Nome: </strong>Bruno cruz</h6>
                                        <h6><strong>Habilidades do candidato: </strong></h6>
                                        <div class="row">
                                            @foreach($vacancy->skills as $skills)
                                                <div class="col-sm-3">
                                                    <div class="card mb-2 pt-1">
                                                        <div class="card-body skill">
                                                            <h6>{{$skills}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card p-2 m-1">
                                        <h6><strong>Nome: </strong>Bruno cruz</h6>
                                        <h6><strong>Habilidades do candidato: </strong></h6>
                                        <div class="row">
                                            @foreach($vacancy->skills as $skills)
                                                <div class="col-sm-3">
                                                    <div class="card mb-2 pt-1">
                                                        <div class="card-body skill">
                                                            <h6>{{$skills}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card p-2 m-1">
                                        <h6><strong>Nome: </strong>Bruno cruz</h6>
                                        <h6><strong>Habilidades do candidato: </strong></h6>
                                        <div class="row">
                                            @foreach($vacancy->skills as $skills)
                                                <div class="col-sm-3">
                                                    <div class="card mb-2 pt-1">
                                                        <div class="card-body skill">
                                                            <h6>{{$skills}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="card p-2 m-1">
                                        <h6><strong>Nome: </strong>Bruno cruz</h6>
                                        <h6><strong>Habilidades do candidato: </strong></h6>
                                        <div class="row">
                                            @foreach($vacancy->skills as $skills)
                                                <div class="col-sm-3">
                                                    <div class="card mb-2 pt-1">
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
                    </div>

                @endforeach
            </tbody>
        </table>
    @else
        <div class="dashboard-title-container">
            <p>Você ainda não criou nenhuma vaga...</p>
        </div>
    @endif
</div>

@endsection