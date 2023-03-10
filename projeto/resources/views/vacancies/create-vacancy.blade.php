@extends('layouts.main')
@section('title', 'Criar Vaga')
@section('content')

<div id="vacancy-create-container" class="col-md-6 offset-md-3">
    <h1>Crie uma vaga</h1>
    <form action="/vacancy" method="POST">
        @csrf
        <div class="form-group mt-3">
            <label for="title">Vaga: </label><small class="text-error"> *</small>
            <input type="text" class="form-control" id="title" name="title" placeholder="Título da vaga">
            @error('title')
                <span class="text-error"><small>{{$message}}</small></span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="title">Local: </label><small class="text-error"> *</small>
            <input type="text" class="form-control" id="local" name="local" placeholder="Local da vaga">
            @error('local')
                <span class="text-error"><small>{{$message}}</small></span>
            @enderror
        </div>
        
        <div class="form-group mt-3">
            <div class="row">
                <div class="col-6">
                    <label for="title">Nível: </label><small class="text-error"> *</small>
                    <select name="level" id="level" class="form-control">
                        <option value="Estágio">Estágio</option>
                        <option value="Júnior">Júnior</option>
                        <option value="Júnior">Sênior</option>
                        <option value="Pleno">Pleno</option>
                    </select> 
                </div>
                <div class="col-6">
                    <label for="title">Tipo: </label><small class="text-error"> *</small>
                    <select name="type" id="type" class="form-control">
                        <option value="Remoto">Remoto</option>
                        <option value="Presencial">Presencial</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <label for="title">Habilidades: </label><small class="text-error"> *</small>
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
                        <input type="checkbox" name="skills[]" value="PostgreSQL"> PostgreSQL
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
                        <input type="checkbox" name="skills[]" value="MySQL"> MySQL
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="MongoDB"> MongoDB
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
            <input type="submit" class="btn btn-success mt-3" value="Criar">
        </div>
    </form>
</div>

@endsection