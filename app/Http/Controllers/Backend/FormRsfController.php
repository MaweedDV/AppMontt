<?php

namespace App\Http\Controllers\Backend;

use App\Models\form_rsf;
use App\DataTables\FormRsfDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\SrfForm\StoreRequest;
use App\Models\Place;
use Illuminate\Http\Request;

class FormRsfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(FormRsfDataTable $dataTable)
    {
        return $dataTable->render('Backend.sections.forms.form-rsf.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $places = Place::all();

        return view('Backend.sections.forms.form-rsf.create', compact('places'));
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
            'observation' => $request->get('observation'),
        ]);

        return redirect()->route('rsf.index')->with('success', 'Formulario ingresado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(form_rsf $form_rsf)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(form_rsf $form_rsf)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, form_rsf $form_rsf)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form_rsf = form_rsf::find($id);
        $form_rsf->delete();

        return redirect()->route('form_rsf.index')->with('success', 'Formulario eliminado correctamente');
    }
}
