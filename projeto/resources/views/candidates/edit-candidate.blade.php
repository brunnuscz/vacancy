@extends('layouts.main')
@section('title', 'Editando: '. $candidate->name)
@section('content')

<div id="vacancy-create-container" class="col-md-6 offset-md-3">
    <h1>Editando: {{$candidate->name}}</h1>
    <form action="/candidate/update/{{$candidate->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group mt-3">
            <label for="name">Nome: </label><small class="text-error"> *</small>
            <input type="text" class="form-control" value="{{$candidate->name}}" id="name" name="name" placeholder="Nome do candidato">
            @error('name')
                <span class="text-error"><small>{{$message}}</small></span>
            @enderror
        </div>
        <div class="form-group mt-3">
            <label for="title">Habilidades: </label><small class="text-error"> *</small>
            <div class="row">
                <div class="col-3">
                    <div class="form-gruop">
                        <input type="checkbox" name="skills[]" value="JavaScript" 
                            <?php if (in_array("JavaScript", $candidate->skills)) {
                                echo "checked";
                            }?>> JavaScript
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Node.js" 
                            <?php if (in_array("Node.js", $candidate->skills)) {
                                echo "checked";
                            }?>> Node.js
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="PHP" 
                            <?php if (in_array("PHP", $candidate->skills)) {
                                echo "checked";
                            }?>> PHP
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Laravel" 
                            <?php if (in_array("Laravel", $candidate->skills)) {
                                echo "checked";
                            }?>> Laravel
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Python" 
                            <?php if (in_array("Python", $candidate->skills)) {
                                echo "checked";
                            }?>> Python
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Django" 
                            <?php if (in_array("Django", $candidate->skills)) {
                                echo "checked";
                            }?>> Django
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="HTML" 
                            <?php if (in_array("HTML", $candidate->skills)) {
                                echo "checked";
                            }?>> HTML
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="PostgreSQL" 
                            <?php if (in_array("PostgreSQL", $candidate->skills)) {
                                echo "checked";
                            }?>> PostgreSQL
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="CSS" 
                            <?php if (in_array("CSS", $candidate->skills)) {
                                echo "checked";
                            }?>> CSS
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Bootstrap" 
                            <?php if (in_array("Bootstrap", $candidate->skills)) {
                                echo "checked";
                            }?>> Bootstrap
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="React" 
                            <?php if (in_array("React", $candidate->skills)) {
                                echo "checked";
                            }?>> React
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="MySQL" 
                            <?php if (in_array("MySQL", $candidate->skills)) {
                                echo "checked";
                            }?>> MySQL
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="MongoDB" 
                            <?php if (in_array("MongoDB", $candidate->skills)) {
                                echo "checked";
                            }?>> MongoDB
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Java" 
                            <?php if (in_array("Java", $candidate->skills)) {
                                echo "checked";
                            }?>> Java
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C++" 
                            <?php if (in_array("C++", $candidate->skills)) {
                                echo "checked";
                            }?>> C++
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="ReactNative" 
                            <?php if (in_array("ReactNative", $candidate->skills)) {
                                echo "checked";
                            }?>> ReactNative
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C" 
                            <?php if (in_array("C", $candidate->skills)) {
                                echo "checked";
                            }?>> C
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="C#" 
                            <?php if (in_array("C#", $candidate->skills)) {
                                echo "checked";
                            }?>> C#
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="Kotlin" 
                            <?php if (in_array("Kotlin", $candidate->skills)) {
                                echo "checked";
                            }?>> Kotlin
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="skills[]" value="R" 
                            <?php if (in_array("R", $candidate->skills)) {
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