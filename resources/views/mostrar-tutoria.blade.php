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
            <h6 class="section-title bg-white text-center text-primary px-3">Detail View</h6>
            <h1 class="mb-5">Tutorship</h1>
        </div>

        <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            <form action="{{ route('tutorias.detail', $tutoria['id_tutoria']) }}" method="POST">
                @csrf
                <input type="hidden" name="id_tutoria"
                    value="{{ isset($tutoria['id_tutoria']) ? $tutoria['id_tutoria'] : '' }}">
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Topic:</strong></h5>
                    {{$tutoria['tema']}}
                </div>
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Comment:</strong></h5>
                    {{$tutoria['comentario']}}
                </div>
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Date:</strong></h5>
                    {{$tutoria['fecha']}}
                </div>
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Duration:</strong></h5>
                    {{$tutoria['duracion']}}
                </div>
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Student Id:</strong></h5>
                    {{$tutoria['id_estudiante']}}
                </div>
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Tutor Id:</strong></h5>
                    {{$tutoria['id_tutor']}}
                </div>
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Subject Id:</strong></h5>
                    {{$tutoria['id_asignatura']}}
                </div>
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>State:</strong></h5>
                    {{$tutoria['estado']}}
                </div>

                <div class="text-center float-right mt-3">
                    <a class="btn btn-primary" href="{{ route('tutorias.index') }}"> {{ __('Back') }}</a>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection