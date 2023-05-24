<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AsignaturasController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://localhost');
        $response = Http::get($url . '/tutorias_uni/dev/v1/Asignatura/');
        $data = $response->json();
        return view('asignaturas', compact('data'));
    }

    public function show($id_asignatura)
    {
        $url = env('URL_SERVER_API', 'http://localhost');
        $response = Http::get($url . '/tutorias_uni/dev/v1/Asignatura/' . $id_asignatura);
        $asignatura = $response->json();
        $asignatura = $asignatura['0'];
        return view('mostrar-asignatura', compact('asignatura'));
    }
}