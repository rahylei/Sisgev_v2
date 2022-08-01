<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
                $this->getUsers('administrador'), 
                $this->getUsers('operador'), 
                $this->getUsers('encargado')])
            ->setLabels(['Administrador', 'Operador', 'Encargado']);
    }

    public function getUsers($role){
        $list = User::all();//DB::table('users')->get();
        $cont=0;

        foreach($list as $item){            
            if($item->hasRole($role)){
                $cont++;
            }
        }
        return $cont;
    }

    
}
