@extends('layouts.main')
@section('title', 'Editar: '.$vacancy->title)
@section('content')

<div id="vacancy-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$vacancy->title}}</h1>
    <form action="/vacancies/update/{{$vacancy->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mt-3">
            <label for="title">Vaga: </label>
            <input type="text" value="{{$vacancy->title}}" class="form-control" id="title" name="title" placeholder="Título da vaga">
        </div>
        <div class="form-group mt-3">
            <label for="title">Local: </label>
            <input type="text" value="{{$vacancy->local}}" class="form-control" id="local" name="local" placeholder="Local da vaga">
        </div>
        
        <div class="form-group mt-3">
            <div class="row">
                <div class="col-6">
                    <label for="title">Nível: </label>
                    <select name="level" id="level" class="form-control">
                        @if($vacancy->level == 'Estágio')
                            <option selected='selected' value="Estágio">Estágio</option>
                            <option value="Júnior">Júnior</option>
                            <option value="Sênior">Sênior</option>
                            <option value="Pleno">Pleno</option>
                        @elseif($vacancy->level == 'Júnior')
                            <option value="Estágio">Estágio</option>
                            <option selected='selected' value="Júnior">Júnior</option>
                            <option value="Sênior">Sênior</option>
                            <option value="Pleno">Pleno</option>
                        @elseif($vacancy->level == 'Sênior')
                            <option value="Estágio">Estágio</option>
                            <option value="Júnior">Júnior</option>
                            <option selected='selected' value="Sênior">Sênior</option>
                            <option value="Pleno">Pleno</option>
                        @else
                            <option value="Estágio">Estágio</option>
                            <option value="Júnior">Júnior</option>
                            <option value="Sênior">Sênior</option>
                            <option selected='selected' value="Pleno">Pleno</option>
                        @endif
                    </select> 
                </div>
                <div class="col-6">
                    <label for="title">Tipo: </label>
                    <select name="type" id="type" class="form-control">
                        @if($vacancy->type == 'Remoto')
                            <option selected='selected' value="Remoto">Remoto</option>
                            <option value="Presencial">Presencial</option>
                        @else
                            <option value="Remoto">Remoto</option>
                            <option selected='selected' value="Presencial">Presencial</option>
                        @endif
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="title">Habilidades: </label>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Node.js"> Node.js
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="PHP"> PHP
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Laravel"> Laravel
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Python"> Python
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Django"> Django
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="HTML"> HTML
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="EJS"> EJS
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="CSS"> CSS
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Bootstrap"> Bootstrap
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="React"> React
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Vue"> Vue
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Ruby"> Ruby
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Java"> Java
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C++"> C++
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="ReactNative"> ReactNative
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C"> C
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C#"> C#
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Kotlin"> Kotlin
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="R"> R
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-criar">
            <input type="submit" class="btn btn-success mt-3" value="Editar">
        </div>
    </form>
</div>

@endsection