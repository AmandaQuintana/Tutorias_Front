@extends('layouts.app')

@section('template_title')
Asignatura
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Teachers') }}
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
                                @foreach($data as $asignatura)
                                <tr>
                                    <th scope="row">{{$asignatura['id_asignatura']}}</th>
                                    <td>{{$asignatura['nombre']}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary"
                                            href="{{ route('asignaturas.show', $asignatura['id_asignatura']) }}">
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