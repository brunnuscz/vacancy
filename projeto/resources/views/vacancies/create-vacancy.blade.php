@extends('layouts.main')
@section('title', 'Criar Vaga')
@section('content')

<div id="vacancy-create-container" class="col-md-6 offset-md-3">
    <h1>Crie uma vaga</h1>
    <form action="/vacancies" method="POST">
        @csrf
        <div class="form-group mt-3">
            <label for="title">Vaga: </label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Título da vaga">
        </div>
        <div class="form-group mt-3">
            <label for="title">Local: </label>
            <input type="text" class="form-control" id="local" name="local" placeholder="Local da vaga">
        </div>
        
        <div class="form-group mt-3">
            <div class="row">
                <div class="col-6">
                    <label for="title">Nível: </label>
                    <select name="level" id="level" class="form-control">
                        <option value="Estágio">Estágio</option>
                        <option value="Júnior">Júnior</option>
                        <option value="Júnior">Sênior</option>
                        <option value="Pleno">Pleno</option>
                    </select> 
                </div>
                <div class="col-6">
                    <label for="title">Tipo: </label>
                    <select name="type" id="type" class="form-control">
                        <option value="Remoto">Remoto</option>
                        <option value="Presencial">Presencial</option>
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
            <input type="submit" class="btn btn-success mt-3" value="Criar">
        </div>
    </form>
</div>

@endsection