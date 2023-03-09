@extends('layouts.main')
@section('title', 'Dashboard')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Minhas vagas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-vacancies-container">

    @if(count($vacancies) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Local</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Nível</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vacancies as $vacancy)
                    <tr>
                        <td scropt="row">{{$loop->index+1}}</td>
                        <td>{{$vacancy->title}}</td>
                        <td>{{$vacancy->local}}</td>
                        <td>{{$vacancy->type}}</td>
                        <td>{{$vacancy->level}}</td>
                        <td class="btn-dashboard">
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
                                    <form action="/vacancies/{{$vacancy->id}}" method="POST">
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
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="col">
                                        <h5>{{$vacancy->title}}</h5>
                                    </div>
                                    <div class="col">
                                        <h5>{{$vacancy->local}}</h5>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>{{$vacancy->level}}</h5>
                                        </div>
                                        <div class="col-6">
                                            <h5>{{$vacancy->type}}</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <h5>Habilidades: </h5>
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
            <p>Você ainda não criou nenhuma vaga</p>
            <a type="button" class="btn btn-success" href="/vacancies/create">Criar vaga</a>
        </div>
    @endif

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Vagas relacionada com suas habilidades</h1>
</div>
<div class="col-md-10 offset-md-1 dashbord-title-container">
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"></a></td>
            </tr>
        </tbody>
    </table>
    <div class="dashboard-title-container">
        <p>Nenhuma vaga se relaciona com suas habilidades</p>
    </div>
    
</div>

@endsection