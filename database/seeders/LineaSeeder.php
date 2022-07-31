<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Linea;

class LineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linea00 = new Linea();
        $linea00->codigo = Str::random(10);
        $linea00->pieza = 'bEVpjnuJMM';
        $linea00->encargado =  'encargado-kun';
        $linea00->save();

        $linea01 = new Linea();
        $linea01->codigo = Str::random(10);
        $linea01->pieza = 'gh1WH9gm8z';
        $linea01->encargado =  'encargado-kun';
        $linea01->save();

        $linea02 = new Linea();
        $linea02->codigo = Str::random(10);
        $linea02->pieza = 'NJVdKB5c08';
        $linea02->encargado =  'encargado-kun';
        $linea02->save();
    }
}
