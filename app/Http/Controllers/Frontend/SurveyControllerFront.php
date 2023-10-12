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
    public function store(Request $request)
    {

        //asignamos valores estáticos, en este caso preguntas de survey
        $name_encuesta = "Encuesta de satisfacción";
        $q8 = "Indique a que área del Departamento de Personal asistió";
        $q8 = "Indique a que área del Departamento de Personal asistió";
        $q9 = "En relación con la pregunta anterior, podría indicarnos ¿qué trámite en especifico realizó?";
        $q10 = "Considera que la atención recibida del funcionario de Personal, fue amable y cordial. Un trato amable y cordial implica saludar, tratar con respeto, orientar al funcionario, y a su vez despedirse correctamente";
        $q11 = "El funcionario de Personal demostró interés en atender mi necesidad o solicitud";
        $q12 = "El funcionario de Personal se tomó el tiempo necesario en atenderme";
        $q13 = "El funcionario de Personal se expresa con claridad y me entrega la información adecuada";
        $q14 = "El tiempo total de espera, desde el momento en que llegué hasta que fuí atendido, fué adecuado";
        $q15 = "En relación a la solución de su trámite o gestión, ¿cumplió sus expectativas?";
        $q16 = "El funcionario del departamento de Personal, domina la materia relacionada con mi trámite o gestión";
        $q17 = "El funcionario de Personal que me atendió, es confiable";
        $q18 = "En general, considerando todas las variables anteriores, como evaluaría la experiencia de su visita al área de personal al cual se dirigió";
        $q19 = "Siente que sufrió algún tipo de discriminación de cualquier tipo. (Político, religioso, de genero, físico, etc.)";
        $q20 = "Si su respuesta anterior fue SI, indique por que motivo se sintió discriminado";
        $q21 = "El Área de Personal es confiable";
        $q22 = "El Área de Personal es eficiente";
        $q23 = "El Área de Personal es cercana";
        $q24 = "En general, considerando todas las variables anteriores, y a todas las secciones y áreas en una escala de 1 a 7, cuan satisfactoria fue la visita realizada";
        $q25 = "Por último, tiene algún comentario respecto a la última visita realizada al Departamento de Personal y/o a Subdirección de Personal, que nos ayude al mejorar";


        $survey = new Survey();

        $survey->name_survey = $name_encuesta;
        $survey->date_attention = $_POST['date_attention'];
        $survey->juridic_quality = $_POST['juridic_quality'];
        $survey->escale = $_POST['escale'];
        $survey->age_range = $_POST['age_range'];
        $survey->genre = $_POST['genre'];
        $survey->years_antiquity = $_POST['years_antiquity'];
        $survey->place_job = $_POST['place_job'];
        $survey->q8 = $q8;
        $survey->a8 = $_POST['a8'];
        $survey->q9 = $q9;
        $survey->a9 = $_POST['a9'];
        $survey->q10 = $q10;
        $survey->a10 = $_POST['a10'];
        $survey->q11 = $q11;
        $survey->a11 = $_POST['a11'];
        $survey->q12 = $q12;
        $survey->a12 = $_POST['a12'];
        $survey->q13 = $q13;
        $survey->a13 = $_POST['a13'];
        $survey->q14 = $q14;
        $survey->a14 = $_POST['a14'];
        $survey->q15 = $q15;
        $survey->a15 = $_POST['a15'];
        $survey->q16 = $q16;
        $survey->a16 = $_POST['a16'];
        $survey->q17 = $q17;
        $survey->a17 = $_POST['a17'];
        $survey->q18 = $q18;
        $survey->a18 = $_POST['a18'];
        $survey->q19 = $q19;
        $survey->a19 = $_POST['a19'];
        $survey->q20 = $q20;
        $survey->a20 = $_POST['a20'];
        $survey->q21 = $q21;
        $survey->a21 = $_POST['a21'];
        $survey->q22 = $q22;
        $survey->a22 = $_POST['a22'];
        $survey->q23 = $q23;
        $survey->a23 = $_POST['a23'];
        $survey->q24 = $q24;
        $survey->a24 = $_POST['a24'];
        $survey->q25 = $q25;
        $survey->a25 = $_POST['a25'];

        $survey->save();

        return redirect()->route('form.index')->with('success', 'Encuesta ingresada correctamente');

        // $user= Survey::create([
        //     'name_survey' => $name_encuesta,
        //     'date_attention' => $request->get('date_attention'),
        //     'juridic_quality' => $request->get('juridic_quality'),
        //     'escale' => $request->get('escale'),
        //     'age_range' => $request->get('age_range'),
        //     'genre' => $request->get('genre'),
        //     'years_antiquity' => $request->get('years_antiquity'),
        //     'place_job' => $request->get('place_job'),
        //     'q8' => $q8,
        //     'a8' => $request->get('a8'),
        //     'q9' => $q9,
        //     'a9' => $request->get('a9'),
        //     'q10' => $q10,
        //     'a10' => $request->get('a10'),
        //     'q11' => $q11,
        //     'a11' => $request->get('a11'),
        //     'q12' => $q12,
        //     'a12' => $request->get('a12'),
        //     'q13' => $q13,
        //     'a13' => $request->get('a13'),
        //     'q14' => $q14,
        //     'a14' => $request->get('a14'),
        //     'q15' => $q15,
        //     'a15' => $request->get('a15'),
        //     'q16' => $q16,
        //     'a16' => $request->get('a16'),
        //     'q17' => $q17,
        //     'a17' => $request->get('a17'),
        //     'q18' => $q18,
        //     'a18' => $request->get('a18'),
        //     'q19' => $q19,
        //     'a19' => $request->get('a19'),
        //     'q20' => $q20,
        //     'a20' => $request->get('a20'),
        //     'q21' => $q21,
        //     'a21' => $request->get('a21'),
        //     'q22' => $q22,
        //     'a22' => $request->get('a22'),
        //     'q23' => $q23,
        //     'a23' => $request->get('a23'),
        //     'q24' => $q24,
        //     'a24' => $request->get('a24'),
        //     'q25' => $q25,
        //     'a25' => $request->get('a25'),
        // ]);

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
