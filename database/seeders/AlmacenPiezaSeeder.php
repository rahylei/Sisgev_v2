<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AlmacenPieza;
use App\Models\Linea;

class AlmacenPiezaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $linea00 = Linea::find(1);
        $linea01 = Linea::find(2);
        $linea02 = Linea::find(3);

        $ap00 = new AlmacenPieza();
        $ap00->codigo_pieza = $linea00->pieza;
        $ap00->piezas_ok = 345;
        $ap00->scrap = 35;
        $ap00->min_alto = mt_rand(25, 27);
        $ap00->min_largo = mt_rand(57,  62);
        $ap00->min_ancho = mt_rand(30, 40);
        $ap00->min_peso = mt_rand(35, 50);
        $ap00->max_alto = mt_rand(31, 34);
        $ap00->max_largo = mt_rand(75, 85);
        $ap00->max_ancho = mt_rand(30, 40);
        $ap00->max_peso = mt_rand(35, 50);
        $ap00->save();

        $ap01 = new AlmacenPieza();
        $ap01->codigo_pieza = $linea01->pieza;
        $ap01->piezas_ok = 555;
        $ap01->scrap = 65;
        $ap01->min_alto = mt_rand(25, 27);
        $ap01->min_largo = mt_rand(57, 62);
        $ap01->min_ancho = mt_rand(30, 40);
        $ap01->min_peso = mt_rand(35, 50);
        $ap01->max_alto = mt_rand(31, 34);
        $ap01->max_largo = mt_rand(75, 85);
        $ap01->max_ancho = mt_rand(30, 40);
        $ap01->max_peso = mt_rand(35, 50);
        $ap01->save();

        $ap02 = new AlmacenPieza();
        $ap02->codigo_pieza = $linea02->pieza;
        $ap02->piezas_ok = 735;
        $ap02->scrap = 85;
        $ap02->min_alto = mt_rand(25, 27);
        $ap02->min_largo = mt_rand(57, 62);
        $ap02->min_ancho = mt_rand(30, 40);
        $ap02->min_peso = mt_rand(35, 50);
        $ap02->max_alto = mt_rand(31, 34);
        $ap02->max_largo = mt_rand(75, 85);
        $ap02->max_ancho = mt_rand(30, 40);
        $ap02->max_peso = mt_rand(35, 50);
        $ap02->save();
            
    }
}
