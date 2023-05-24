<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EstudiantesController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://localhost');
        $response = Http::get($url . '/tutorias_uni/dev/v1/Estudiante/');
        $data = $response->json();
        return view('estudiantes', compact('data'));
    }

    public function show($id_estudiante)
    {
        $url = env('URL_SERVER_API', 'http://localhost');
        $response = Http::get($url . '/tutorias_uni/dev/v1/Estudiante/' . $id_estudiante);
        $estudiante = $response->json();
        $estudiante = $estudiante['0'];
        return view('mostrar-estudiante', compact('estudiante'));
    }
}