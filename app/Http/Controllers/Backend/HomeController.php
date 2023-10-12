<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\form_rsf;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //contadores
        $sugerencias_count = form_rsf::where('type_procedure', 'Sugerencia')->get()->count();
        $reclamos_count = form_rsf::where('type_procedure', 'Reclamo')->get()->count();
        $felicitaciones_count = form_rsf::where('type_procedure', 'Felicitacion')->get()->count();
        $surveys_count = Survey::count();
        $frs_count = form_rsf::count();
        $users_count = User::count();
        $satisfaccion_min = Survey::where('a24', '<=', '3' )->get()->count();
        $satisfaccion_med = Survey::where('a24', '>', '3' )->where('a24',  '<=', '5')->get()->count();
        $satisfaccion_max = Survey::where('a24', '>', '5' )->get()->count();
        //porcentuales
        $sugerencias_porcent = $sugerencias_count / $frs_count * 100;
        $reclamos_porcent = $reclamos_count / $frs_count * 100;
        $felicitaciones_porcent = $felicitaciones_count / $frs_count * 100;
        $satisfaccion_min_porcent = $satisfaccion_min / $surveys_count * 100;
        $satisfaccion_med_porcent = $satisfaccion_med / $surveys_count * 100;
        $satisfaccion_max_porcent = $satisfaccion_max / $surveys_count * 100;

        return view('dashboard', compact('surveys_count', 'sugerencias_count', 'frs_count', 'reclamos_count', 'felicitaciones_count', 'users_count',
                                         'sugerencias_porcent', 'reclamos_porcent', 'felicitaciones_porcent', 'satisfaccion_min_porcent',
                                         'satisfaccion_med_porcent','satisfaccion_max_porcent'));
    }

    public function profile()
    {
        $user = auth()->user();

        return view('backend.sections.profile.index', compact('user'));
    }

}
