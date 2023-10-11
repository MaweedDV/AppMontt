<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\form_rsf;
use App\Models\Survey;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $surveys = Survey::count();
        $frs = form_rsf::count();

        //$frs_fel = form_rsf::find('Felicitacion');
        $sugerencias = form_rsf::where('type_procedure', 'Sugerencia')->get()->count();
        //$frs_rec = form_rsf::find('Reclamo');


        return view('dashboard', compact('surveys'), compact('frs'), compact('sugerencias'));
    }

    public function profile()
    {
        $user = auth()->user();

        return view('backend.sections.profile.index', compact('user'));
    }

}
