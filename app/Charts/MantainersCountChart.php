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
        $departments = Department::count();
        $users = User::count();
        $work_places = Place::count();

        return $this->chart->pieChart()
            ->setTitle('')
            // ->setSubtitle('Season 2021.')
            ->addData([$users, $departments, $work_places])
            ->setLabels(['Usuarios', 'Departamentos', 'Lugares de trabajo']);
    }
}
