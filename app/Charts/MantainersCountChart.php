<?php

namespace App\Charts;

use App\Models\Department;
use App\Models\Place;
use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class MantainersCountChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $departmentsNames = Department::pluck('name');
        // dd('hola', $departmentsNames);

        return $this->chart->pieChart()
            ->setTitle('Mantenedores')
            // ->setSubtitle('Season 2021.')
            ->addData([User::count(), Department::count(), Place::count()])
            ->setLabels(['Usuarios', 'Departamentos', 'Lugares de trabajo']);
    }
}
