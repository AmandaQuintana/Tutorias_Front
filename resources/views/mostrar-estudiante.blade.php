@extends('layouts.app')

@section('template_title')
Estudiante
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
            <h1 class="mb-5">Student</h1>
        </div>

        <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
            <form action="{{ route('estudiantes.show', $estudiante['id_estudiante']) }}" method="POST">
                @csrf
                <input type="hidden" name="id_estudiante"
                    value="{{ isset($estudiante['id_estudiante']) ? $estudiante['id_estudiante'] : '' }}">
                <div class="text-center wow fadeInUp form-group mb-3">
                    <h5><strong>Name:</strong></h5>
                    {{$estudiante['nombre']}}
                </div>

                <div class="text-center float-right mt-3">
                    <a class="btn btn-primary" href="{{ route('estudiantes.index') }}"> {{ __('Back') }}</a>
                </div>

                <div class="miDiv">
                </div>
            </form>
        </div>

    </div>
</div>

@endsection