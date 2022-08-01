<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Linea;
use App\Models\Pieza;
use App\Models\User;

class LineaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user00 = User::find(1);
        $user01 = User::find(2);
        $user02 = User::find(3);

        $pieza00 = Pieza::find(1);
        $pieza01 = Pieza::find(2);
        $pieza02 = Pieza::find(3);

        $linea00 = new Linea();
        $linea00->codigo = Str::random(10);
        $linea00->pieza = $pieza00->codigo;
        $linea00->encargado =  $user00->name;
        $linea00->status = true;
        $linea00->save();
        $pieza00->check = true;
        $pieza00->save();

        $linea01 = new Linea();
        $linea01->codigo = Str::random(10);
        $linea01->pieza = $pieza01->codigo;
        $linea01->encargado = $user01->name;;
        $linea01->status = true;
        $linea01->save();
        $pieza01->check = true;
        $pieza01->save();

        $linea02 = new Linea();
        $linea02->codigo = Str::random(10);
        $linea02->pieza = $pieza02->codigo;;
        $linea02->encargado = $user02->name;;
        $linea02->status = true;
        $linea02->save();
        $pieza02->check = true;
        $pieza02->save();
    }
}
