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
                    <th class="text-center" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td class="text-center" scropt="row">{{$loop->index+1}}</td>
                        <td class="text-center" >{{$vacancy->title}}</td>
                        <td class="btn-dashboard text-center">
                            <a class="btn btn-primary edit-btn" href="/vacancy/show/{{$vacancy->id}}"><i class="fa-solid fa-eye"></i> Ver mais</a>
                            <a class="btn btn-danger edit-btn" data-bs-toggle="modal" data-bs-target="#deleteVacancy{{$vacancy->id}}"><i class="fa-solid fa-trash"></i> Deletar</a>
                            <a class="btn btn-info edit-btn" href="/vacancy/edit/{{$vacancy->id}}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                        </td>
                    </tr>

                    <!-- MODAL DELETE VACANCY -->
                    <div class="modal fade" id="deleteVacancy{{$vacancy->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <h5>Tem certeza que deseja deletar esta vaga?</h5>
                                    </div>
                                    <form action="/vacancy/delete/{{$vacancy->id}}" method="POST">
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
                    <!-- END MODAL DELETE VACANCY-->

                @endforeach
            </tbody>
        </table>
    @else
        <div class="dashboard-title-container">
            <p>Você ainda não criou nenhuma vaga...</p>
        </div>
    @endif
</div>



<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Candiatos</h1>
</div>

<div class="col-md-10 offset-md-1 dashboard-vacancies-container">
    @if(count($candidates) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th class="text-center" scope="col">#</th>
                    <th class="text-center" scope="col">Nome</th>
                    <th class="text-center" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($candidates as $candidate)
                    <tr>
                        <td class="text-center" scropt="row">{{$loop->index+1}}</td>
                        <td class="text-center" >{{$candidate->name}}</td>
                        <td class="btn-dashboard text-center">
                            <a class="btn btn-primary edit-btn" data-bs-toggle="modal" data-bs-target="#viewMoreCandidate{{$candidate->id}}"><i class="fa-solid fa-eye"></i> Ver mais</a>
                            <a class="btn btn-danger edit-btn" data-bs-toggle="modal" data-bs-target="#deleteCandidate{{$candidate->id}}"><i class="fa-solid fa-trash"></i> Deletar</a>
                            <a class="btn btn-info edit-btn" href="/candidate/edit/{{$candidate->id}}"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
                        </td>
                    </tr>

                    <!-- MODAL DELETE CANDIDATE -->
                    <div class="modal fade" id="deleteCandidate{{$candidate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div>
                                        <h5>Tem certeza que deseja deletar este candidato?</h5>
                                    </div>
                                    <form action="/candidate/delete/{{$candidate->id}}" method="POST">
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
                    <!-- END MODAL DELETE CANDIDATE -->


                    <!-- MODAL VIEW MORE CANDIDATE -->
                    <div class="modal fade" id="viewMoreCandidate{{$candidate->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body card m-3 p-3">
                                    <div class="col">
                                        <h6><strong>Nome: </strong>{{$candidate->name}}</h6>
                                    </div>
                                    <h6><strong>Habilidades do candidato: </strong></h6>
                                    <div class="row">
                                        @foreach($candidate->skills as $skills)
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
                    <!-- END MODAL VIEW MORE CANDIDATE -->

                @endforeach
            </tbody>
        </table>
    @else
        <div class="dashboard-title-container">
            <p>Você ainda não criou nenhum candidato...</p>
        </div>
    @endif
</div>

@endsection