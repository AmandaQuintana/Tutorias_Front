<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TutoresController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://localhost');
        $response = Http::get($url . '/tutorias_uni/dev/v1/Tutor/');
        $data = $response->json();
        return view('tutores', compact('data'));
    }

    public function show($id_tutor)
    {
        $url = env('URL_SERVER_API', 'http://localhost');
        $response = Http::get($url . '/tutorias_uni/dev/v1/Tutor/' . $id_tutor);
        $tutor = $response->json();
        $tutor = $tutor['0'];
        return view('mostrar-tutor', compact('tutor'));
    }
}
