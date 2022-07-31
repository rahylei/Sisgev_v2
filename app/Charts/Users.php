<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;

class Users
{
    protected $chart;
    


    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        $userList = new User();
        
        return $this->chart->pieChart()
            ->setTitle('Users')
            ->setSubtitle('Divide for roles')
            ->addData([
                count(User::all()), 
                count(User::all()), 
                count(User::all())])
            ->setLabels(['Administrador', 'Operador', 'Encargado']);
    }
    
}
