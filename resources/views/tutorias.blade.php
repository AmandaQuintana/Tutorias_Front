@extends('layouts.app')

@section('template_title')
Tutoria
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Tutorship') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('tutoria.create') }}" class="btn btn-primary btn-sm float-right"
                                data-placement="left">
                                {{ __('Create New') }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>ID</th>
                                    <th scope="col">Topic</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Duration</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $tutoria)
                                <tr>
                                    <th scope="row">{{$tutoria['id_tutoria']}}</th>
                                    <td>{{$tutoria['tema']}}</td>
                                    <td>{{$tutoria['comentario']}}</td>
                                    <td>{{$tutoria['duracion']}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary "
                                            href="{{ route('tutorias.detail',$tutoria['id_tutoria']) }}"><i
                                                class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                        <a class="btn btn-sm btn-success"
                                            href="{{ route('tutorias.edit', $tutoria['id_tutoria']) }}">
                                            <i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}
                                        </a>
                                        <a class="btn btn-sm btn-danger "
                                            href="{{ route('tutorias.delete',$tutoria['id_tutoria']) }}"><i
                                                class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</a>
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