<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $chart_options = [
            'chart_title' => 'Cual es su calidad Jurídica',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Survey',
            'group_by_field' => 'juridic_quality',
            // 'group_by_period' => 'month',
            'chart_type' => 'pie',
            'group_by_field' => 'juridic_quality',

            'filter_field' => 'juridic_quality',
            'responsive' => 'true',
        ];
        $chart = new LaravelChart($chart_options);


        $chart_options = [
            'chart_title' => 'Sexo',
            'chart_type' => 'pie',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Survey',

            // 'relationship_name' => 'user', // represents function user() on Transaction model
            'group_by_field' => 'genre', // users.name

            // 'aggregate_function' => 'count',
            // 'aggregate_field' => 'genre',

            'filter_field' => 'genre',
            'responsive' => 'true',
            // 'filter_days' => 30, // show only transactions for last 30 days
            // 'filter_period' => 'week', // show only transactions for this week
        ];
        $chart1 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'Cuál es su escalafón',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Survey',
            'group_by_field' => 'escale',
            // 'group_by_period' => 'month',
            'chart_type' => 'pie',

            'filter_field' => 'escale',
            'responsive' => 'true',
        ];
        $chart2 = new LaravelChart($chart_options);

        $chart_options = [
            'chart_title' => 'CANTIDAD DE RESPUESTA',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Survey',
            'group_by_field' => 'a10',
            'backgroundColor' => 'rgba(255, 99, 132, 0.2)',
            // 'group_by_period' => 'month',
            'chart_type' => 'bar',
            'filter_field' => 'id',
            'aggregate_function' => 'count',
            'responsive' => 'true',
        ];
        $chart3 = new LaravelChart($chart_options);

        return view('Backend.sections.dashboard.index', compact('chart', 'chart1', 'chart2', 'chart3'));





    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
