<?php

namespace App\Http\Controllers\Backend;

use App\Charts\MantainersCountChart;
use App\Http\Controllers\Controller;
use App\Models\form_rsf;
use App\Models\Survey;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(MantainersCountChart $MantainersCountChart){
        //contadores
        $sugerencias_count = form_rsf::where('type_procedure', 'Sugerencia')->count();
        $reclamos_count = form_rsf::where('type_procedure', 'Reclamo')->count();
        $felicitaciones_count = form_rsf::where('type_procedure', 'Felicitacion')->count();
        $surveys_count = Survey::count();
        $frs_count = form_rsf::count();
        $users_count = User::count();
        $satisfaccion_min = Survey::where('a24', '<=', '3' )->count();
        $satisfaccion_med = Survey::where('a24', '>', '3' )->where('a24',  '<=', '5')->count();
        $satisfaccion_max = Survey::where('a24', '>', '5' )->count();
        //porcentuales
        $sugerencias_porcent = ($sugerencias_count) ? ($sugerencias_count / $frs_count * 100) : 0;
        $reclamos_porcent = ($reclamos_count) ? ($reclamos_count / $frs_count * 100) : 0;
        $felicitaciones_porcent = ($felicitaciones_count) ? ($felicitaciones_count / $frs_count * 100) : 0;
        $satisfaccion_min_porcent = ($satisfaccion_min) ? ($satisfaccion_min / $surveys_count * 100) : 0;
        $satisfaccion_med_porcent = ($satisfaccion_med) ? ($satisfaccion_med / $surveys_count * 100) : 0;
        $satisfaccion_max_porcent = ($satisfaccion_max) ? ($satisfaccion_max / $surveys_count * 100) : 0;

        return view('dashboard', compact('surveys_count', 'sugerencias_count', 'frs_count', 'reclamos_count', 'felicitaciones_count', 'users_count',
                                         'sugerencias_porcent', 'reclamos_porcent', 'felicitaciones_porcent', 'satisfaccion_min_porcent',
                                         'satisfaccion_med_porcent','satisfaccion_max_porcent'), ['MantainersCountChart' => $MantainersCountChart->build()]);
    }

    public function profile()
    {
        $user = auth()->user();

        return view('backend.sections.profile.index', compact('user'));
    }

}
