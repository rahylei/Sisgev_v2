<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Linea;

class LineasChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('Lineas')
            ->setSubtitle('Lineas')
            ->addData([count(Linea::all()), count(Linea::all()), count(Linea::all())])
            ->setLabels(['Linea 1', 'Linea 2', 'Linea 3']);
    }
}
