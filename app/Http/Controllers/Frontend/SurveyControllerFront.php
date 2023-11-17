<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Survey;
use Illuminate\Http\Request;
use App\http\Requests\Survey\StoreRequest;

class SurveyControllerFront extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $places = Place::all();

        return view('Frontend.sections.survey.create', compact('places'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        //asignamos valores estáticos, en este caso preguntas de survey
        $name_encuesta = "Encuesta de satisfacción";
        $q8 = "Indique a que área del Departamento de Personal asistió";
        $q9 = "En relación con la pregunta anterior, podría indicarnos ¿qué trámite en especifico realizó?";
        $q10 = "Considera que la atención recibida del funcionario de Personal, fue amable y cordial. Un trato amable y cordial implica saludar, tratar con respeto, orientar al funcionario, y a su vez despedirse correctamente";
        $q11 = "El funcionario de Personal demostró interés en atender mi necesidad o solicitud";
        $q12 = "El funcionario de Personal se tomó el tiempo necesario en atenderme";
        $q13 = "El funcionario de Personal se expresa con claridad y me entrega la información adecuada";
        $q14 = "El tiempo total de espera, desde el momento en que llegué hasta que fuí atendido, fué adecuado";
        $q15 = "El funcionario del departamento de Personal, domina la materia relacionada con mi trámite o gestión";

        //$q16 = "El funcionario de Personal que me atendió, es confiable";
        $q16 = "Siente que sufrió algún tipo de discriminación de cualquier tipo. (Político, religioso, de genero, físico, etc.)";
        $q17 = "Si su respuesta anterior fue SI, indique por que motivo se sintió discriminado";
        $q18 = "El Área de Personal es confiable";
        $q19 = "El Área de Personal es eficiente";
        $q20 = "El Área de Personal es cercana";
        $q21 = "En relación a la solución de su trámite o gestión, ¿fué solucionado satisfactoriamente?";
        $q22 = "En general, considerando todas las variables anteriores, y a todas las secciones y áreas en una escala de 1 a 7, cuan satisfactoria fue la visita realizada";
        $q23 = "Por último, tiene algún comentario respecto a la última visita realizada al Departamento de Personal y/o a Subdirección de Personal, que nos ayude al mejorar";
        //$q24 = "";



        $survey = Survey::create([
            'name_survey' => $name_encuesta,
            'date_attention' => $request->get('date_attention'),
            'juridic_quality' => $request->get('juridic_quality'),
            'escale' => $request->get('escale'),
            'age_range' => $request->get('age_range'),
            'genre' => $request->get('genre'),
            'years_antiquity' => $request->get('years_antiquity'),
            'place_job' => $request->get('place_job'),
            'q8' => $q8,
            'a8' => $request->get('a8'),
            'q9' => $q9,
            'a9' => $request->get('a9'),
            'q10' => $q10,
            'a10' => $request->get('a10'),
            'q11' => $q11,
            'a11' => $request->get('a11'),
            'q12' => $q12,
            'a12' => $request->get('a12'),
            'q13' => $q13,
            'a13' => $request->get('a13'),
            'q14' => $q14,
            'a14' => $request->get('a14'),
            'q15' => $q15,
            'a15' => $request->get('a15'),
            'q16' => $q16,
            'a16' => $request->get('a16'),
            'q17' => $q17,
            'a17' => $request->get('a17'),
            'q18' => $q18,
            'a18' => $request->get('a18'),
            'q19' => $q19,
            'a19' => $request->get('a19'),
            'q20' => $q20,
            'a20' => $request->get('a20'),
            'q21' => $q21,
            'a21' => $request->get('a21'),
            'q22' => $q22,
            'a22' => $request->get('a22'),
            'q23' => $q23,
            'a23' => $request->get('a23'),

            // 'q24' => $q24,
            // 'a24' => $request->get('a24'),
        ]);

        return redirect()->route('form.index')->with('success', 'Encuesta ingresada correctamente');
        // dd($user);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
