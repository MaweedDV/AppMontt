<?php

namespace App\Charts;

use App\Models\form_rsf;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class FormRsfChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\RadialChart
    {
        $percentage_suggestions = (form_rsf::where('type_procedure', 'Sugerencia')->count()) ? (form_rsf::where('type_procedure', 'Sugerencia')->count() / form_rsf::count() * 100) : 0;
        $percentage_claims = (form_rsf::where('type_procedure', 'Reclamo')->count()) ? (form_rsf::where('type_procedure', 'Reclamo')->count() / form_rsf::count() * 100) : 0;
        $percentage_congratulations = (form_rsf::where('type_procedure', 'Felicitacion')->count()) ? (form_rsf::where('type_procedure', 'Felicitacion')->count() / form_rsf::count() * 100) : 0;

        return $this->chart->radialChart()
            ->addData([$percentage_congratulations, $percentage_suggestions, $percentage_claims])
            ->setLabels(['Felicitaciones', 'Sugerencias', 'Reclamos'])
            ->setColors(['#6f9c40', '#e69f17', '#e04f1a']);
    }
}
