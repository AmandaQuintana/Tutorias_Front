@extends('layouts.app')

@section('template_title')
Estudiante
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Students') }}
                        </span>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>ID</th>
                                    <th scope="col">Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $estudiante)
                                <tr>
                                    <th scope="row">{{$estudiante['id_estudiante']}}</th>
                                    <td>{{$estudiante['nombre']}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('estudiantes.show', $estudiante['id_estudiante']) }}">
                                            <i class="fa fa-fw fa-eye"></i> {{ __('Show') }}
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection