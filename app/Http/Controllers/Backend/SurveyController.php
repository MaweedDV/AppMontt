<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Survey;
use Illuminate\Http\Request;
use App\DataTables\SurveysDataTable;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SurveysDataTable $datatable)
    {
        return $datatable->render('Backend.sections.forms.surveys.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $places = Place::all();


        return view('Backend.sections.forms.surveys.create', compact('places'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            $survey = Survey::find($id);

            return view('Backend.sections.forms.surveys.show', compact('survey'));
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
