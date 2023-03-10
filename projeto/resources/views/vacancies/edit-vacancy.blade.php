@extends('layouts.main')
@section('title', 'Editar: '.$vacancy->title)
@section('content')

<div id="vacancy-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$vacancy->title}}</h1>
    <form action="/vacancy/update/{{$vacancy->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mt-3">
            <label for="title">Vaga: </label><small class="text-error"> *</small>
            <input type="text" value="{{$vacancy->title}}" class="form-control" id="title" name="title" placeholder="Título da vaga">
            @error('title')
                <span class="text-error"><small>{{$message}}</small></span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="title">Local: </label><small class="text-error"> *</small>
            <input type="text" value="{{$vacancy->local}}" class="form-control" id="local" name="local" placeholder="Local da vaga">
            @error('local')
                <span class="text-error"><small>{{$message}}</small></span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <div class="row">
                <div class="col-6">
                    <label for="title">Nível: </label><small class="text-error"> *</small>
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
                    <label for="title">Tipo: </label><small class="text-error"> *</small>
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
            <label for="title">Habilidades: </label><small class="text-error"> *</small>
            <div class="row">
                <div class="col-3">
                    <div class="form-gruop">
                        <input type="checkbox" name="skills[]" value="JavaScript" 
                            <?php if (in_array("JavaScript", $vacancy->skills)) {
                                echo "checked";
                            }?>> JavaScript
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Node.js" 
                            <?php if (in_array("Node.js", $vacancy->skills)) {
                                echo "checked";
                            }?>> Node.js
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="PHP" 
                            <?php if (in_array("PHP", $vacancy->skills)) {
                                echo "checked";
                            }?>> PHP
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Laravel" 
                            <?php if (in_array("Laravel", $vacancy->skills)) {
                                echo "checked";
                            }?>> Laravel
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Python" 
                            <?php if (in_array("Python", $vacancy->skills)) {
                                echo "checked";
                            }?>> Python
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Django" 
                            <?php if (in_array("Django", $vacancy->skills)) {
                                echo "checked";
                            }?>> Django
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="HTML" 
                            <?php if (in_array("HTML", $vacancy->skills)) {
                                echo "checked";
                            }?>> HTML
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="PostgreSQL" 
                            <?php if (in_array("PostgreSQL", $vacancy->skills)) {
                                echo "checked";
                            }?>> PostgreSQL
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="CSS" 
                            <?php if (in_array("CSS", $vacancy->skills)) {
                                echo "checked";
                            }?>> CSS
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Bootstrap" 
                            <?php if (in_array("Bootstrap", $vacancy->skills)) {
                                echo "checked";
                            }?>> Bootstrap
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="React" 
                            <?php if (in_array("React", $vacancy->skills)) {
                                echo "checked";
                            }?>> React
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="MySQL" 
                            <?php if (in_array("MySQL", $vacancy->skills)) {
                                echo "checked";
                            }?>> MySQL
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="MongoDB" 
                            <?php if (in_array("MongoDB", $vacancy->skills)) {
                                echo "checked";
                            }?>> MongoDB
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Java" 
                            <?php if (in_array("Java", $vacancy->skills)) {
                                echo "checked";
                            }?>> Java
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C++" 
                            <?php if (in_array("C++", $vacancy->skills)) {
                                echo "checked";
                            }?>> C++
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="ReactNative" 
                            <?php if (in_array("ReactNative", $vacancy->skills)) {
                                echo "checked";
                            }?>> ReactNative
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C" 
                            <?php if (in_array("C", $vacancy->skills)) {
                                echo "checked";
                            }?>> C
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C#" 
                            <?php if (in_array("C#", $vacancy->skills)) {
                                echo "checked";
                            }?>> C#
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Kotlin" 
                            <?php if (in_array("Kotlin", $vacancy->skills)) {
                                echo "checked";
                            }?>> Kotlin
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="R" 
                            <?php if (in_array("R", $vacancy->skills)) {
                                echo "checked";
                            }?>> R
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