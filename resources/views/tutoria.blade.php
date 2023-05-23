@extends('layouts.app')

@section('template_title')
Tutoria
@endsection

@section('content')
<h1>Nueva Tutoria</h1>
<form action="{{ route('tutoria.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="tema" class="form-label">Tema</label>
        <input type="text" class="form-control" name="tema">
    </div>
    <div class="mb-3">
        <label for="comentario" class="form-label">Comentario</label>
        <input type="text" class="form-control" name="comentario">
    </div>
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha</label>
        <input type="date" class="form-control" name="fecha">
    </div>
    <div class="mb-3">
        <label for="duracion" class="form-label">Duracion</label>
        <input type="number" class="form-control" name="duracion">
    </div>
    <div class="mb-3">
        <label for="id_estudiante" class="form-label">Id Estudiante</label>
        <input type="number" class="form-control" name="id_estudiante">
    </div>
    <div class="mb-3">
        <label for="id_tutor" class="form-label">Id Tutor</label>
        <input type="number" class="form-control" name="id_tutor">
    </div>
    <div class="mb-3">
        <label for="id_asignatura" class="form-label">Id Asignatura</label>
        <input type="number" class="form-control" name="id_asignatura">
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <input type="number" class="form-control" name="estado">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection