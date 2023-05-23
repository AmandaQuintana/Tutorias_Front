@extends('layouts.app')

@section('template_title')
Tutoria
@endsection

@section('content')
<h1>Turorias</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tema</th>
            <th scope="col">Comentarios</th>
            <th scope="col">Duracion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $tutoria)
        <tr>
            <th scope="row">1</th>
            <td>{{$tutoria['tema']}}</td>
            <td>{{$tutoria['comentario']}}</td>
            <td>{{$tutoria['duracion']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection