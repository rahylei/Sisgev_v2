<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\AlmacenPieza;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;

class PiezasBarChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {        

        $col1 = "Piezas Ok";
        $col2 = "Scrap";

        return $this->chart->barChart()
            ->setTitle('Piezas')
            ->setSubtitle('Almacen')
            ->addData($col1, $this->getColPiezas())
            ->addData($col2, $this->getColScrap())
            ->setXAxis($this->getColCodigo());
    }

    public function getColPiezas(){        
        $list = DB::table('almacen_piezas')->get();
        foreach($list as $item){            
            $piezas[] = $this->getPiezas($item->id);
        }
        return $piezas;
    }

    public function getColScrap(){        
        $list = DB::table('almacen_piezas')->get();
        foreach($list as $item){            
            $scrap[] = $this->getScrap($item->id);
        }
        return $scrap;
    }

    public function getColCodigo(){        
        $list = DB::table('almacen_piezas')->get();
        foreach($list as $item){            
            $codigo[] = $this->getCodigo($item->id);
        }
        return $codigo;
    }

    public function getCodigo($id){
        $piezasOk = DB::table('almacen_piezas')->where('id', $id)->value('codigo_pieza');
        return $piezasOk;      
    }

    public function getPiezas($id){        
        $piezasOk = DB::table('almacen_piezas')->where('id', $id)->value('piezas_ok');
        return $piezasOk;      
    }

    public function getScrap($id){        
        $piezasOk = DB::table('almacen_piezas')->where('id', $id)->value('scrap');
        return $piezasOk;      
    }
}
