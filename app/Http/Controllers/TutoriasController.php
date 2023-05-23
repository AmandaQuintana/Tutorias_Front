<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Nette\Utils\DateTime;

class TutoriasController extends Controller
{
    public function index()
    {
        $url = env('URL_SERVER_API', 'http://localhost');
        $response = Http::get($url . '/tutorias_uni/dev/v1/Tutorias/');
        $data = $response->json();
        return view('tutorias', compact('data'));
    }

    public function create()
    {
        return view('tutoria');
    }

    public function store(Request $request)
    {
        $date = new DateTime($request->fecha);
        $formattedDate = $date->format("Y-m-d H:i:s.u\Z");

        $url = env('URL_SERVER_API', 'http://localhost');
        Http::asMultipart()->post($url . '/tutorias_uni/dev/v1/Tutorias/', [
            "idEstudiante" => $request->id_estudiante,
            "idTutor" => $request->id_tutor,
            "idAsignatura" => $request->id_asignatura,
            "tema" => $request->tema,
            "fecha" => $formattedDate,
            "duracion" => $request->duracion,
            "comentario" => $request->comentario,
            "estado" => $request->estado
        ]);
        return redirect()->route('tutorias.index')->with('success', 'Tutoria created successfully.');
    }
}