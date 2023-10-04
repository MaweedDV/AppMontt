<?php

namespace App\Http\Controllers\Backend;

use App\Models\form_rsf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormRsfController extends Controller
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
        return view('Backend.surveys.form_rsf');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_rsf = new form_rsf();

        $form_rsf->name = $_POST['txtName'];
        $form_rsf->date_attention = $_POST['txtDate'];
        $form_rsf->hour_attention = $_POST['txtHour'];
        $form_rsf->email = $_POST['txtEmail'];
        $form_rsf->phone = $_POST['txtPhone'];
        $form_rsf->address = $_POST['txtAddress'];
        $form_rsf->place_job = $_POST['txtPlace_Job'];
        $form_rsf->type_procedure = $_POST['txtType_Procedure'];
        $form_rsf->area_attention = $_POST['txtArea_attention'];
        $form_rsf->observation = $_POST['txtObservation'];

        $form_rsf->save();

        echo'<script type="text/javascript">
        alert("Proceso ingresado con exito");
        window.location.href="surveys";
    </script>';


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
    public function destroy(form_rsf $form_rsf)
    {
        //
    }
}
