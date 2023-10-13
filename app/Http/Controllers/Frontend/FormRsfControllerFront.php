<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SrfForm\StoreRequest;
use App\Models\form_rsf;
use App\Models\Place;
use Illuminate\Http\Request;

class FormRsfControllerFront extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $places = Place::all();

        return view('Frontend.sections.form-rsf.create', compact('places'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        form_rsf::create([
            'name' => $request->get('name'),
            'date_attention' => $request->get('date_attention'),
            'hour_attention' => $request->get('hour_attention'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address' => $request->get('address'),
            'place_job' => $request->get('place_job'),
            'type_procedure' => $request->get('type_procedure'),
            'area_attention' => $request->get('area_attention'),
            'subject' => $request->get('subject'),
            'observation' => $request->get('observation'),
        ]);

        return redirect()->route('form.index')->with('success', 'Formulario ingresado correctamente');
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
