@extends('layouts.app')

@section('template_title')
Tutoria
@endsection

@section('content')
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">

        </div>
    </div>
</section>
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Form View</h6>
            <h1 class="mb-5">Tutorship</h1>
        </div>

        <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            <form action="{{ route('tutoria.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="tema" class="form-label">Topic</label>
                    <input type="text" class="form-control" name="tema">
                </div>
                <div class="mb-3">
                    <label for="comentario" class="form-label">Comment</label>
                    <input type="text" class="form-control" name="comentario">
                </div>
                <div class="mb-3">
                    <label for="fecha" class="form-label">Date</label>
                    <input type="date" class="form-control" name="fecha">
                </div>
                <div class="mb-3">
                    <label for="duracion" class="form-label">Duration</label>
                    <input type="number" class="form-control" name="duracion">
                </div>
                <div class="mb-3">
                    <label for="id_estudiante" class="form-label">Student Id</label>
                    <input type="number" class="form-control" name="id_estudiante">
                </div>
                <div class="mb-3">
                    <label for="id_tutor" class="form-label">Tutor Id</label>
                    <input type="number" class="form-control" name="id_tutor">
                </div>
                <div class="mb-3">
                    <label for="id_asignatura" class="form-label">Subject Id</label>
                    <input type="number" class="form-control" name="id_asignatura">
                </div>
                <div class="mb-3">
                    <label for="estado" class="form-label">State</label>
                    <input type="number" class="form-control" name="estado">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    </div>
</div>
@endsection