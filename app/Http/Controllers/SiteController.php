<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\Users;
use App\Charts\PiezasBarChart;
use App\Charts\LineasChart;
use App\Models\User;
use App\Models\Pieza;
use App\Models\Linea;
use App\Actions\Jetstream\DeleteUser;
use Carbon\Carbon;

class SiteController extends Controller
{

    function index(Users $chart, PiezasBarChart $chartP, LineasChart $chartL) {        

        return view('dashboard', [  'chart' => $chart->build(), 
                                    'chartP' => $chartP->build(), 
                                    'chartL' => $chartL->build()]);
    }

    function lineas(){
        return view('lineas');
    }

    function personal(){
        return view('personal');
    }

    function piezas(){
        return view('piezas');
    }


    function altaUsuario(Request $request){

        $newuser = new User();
        $newuser->name = $request->name;
        //$newuser->role = $request->role;
        $newuser->email = $request->email;
        $newuser->password = Hash::make($request->password);
        $newuser->timestamps = Carbon::now();
        $newuser->save();

        return redirect('personal');
    }

    function rmUsuario($id){  
        $user = User::find($id);
        $user->delete();
        //return "se ha eliminado a ".$user->name;
        return redirect('personal');//"Que pedo se ha eliminado a ".$user->name."!!!";
    }

    function upUsuario(Request $up){  
        $user = User::find($up->id);
        $user->name = $up->name;        
        $user->email = $up->email;
        $user->password = Hash::make($up->password);
        //$user->timestamps = Carbon::now();
        $user->save();
        //return "fue con el idice".$up->id." y nombre ".$up->name;   
        return redirect('personal');//"Que pedo se ha eliminado a ".$user->name."!!!";
    }

    function altaPieza(Request $request){

        $newpieza = new Pieza();
        $newpieza->codigo = $request->codigo;
        $newpieza->alto = $request->alto;
        $newpieza->largo = $request->largo;
        $newpieza->ancho = $request->ancho;
        $newpieza->peso = $request->peso;
        $newpieza->check = false;
        $newpieza->timestamps = Carbon::now();
        $newpieza->save();

        return redirect('piezas');
    }

        function rmPieza($id){  
        $pieza = Pieza::find($id);
        $pieza->delete();
        //return "se ha eliminado a ".$user->name;
        return redirect('piezas');//"Que pedo se ha eliminado a ".$user->name."!!!";
    }

    function upPieza(Request $up){

        $pieza = Pieza::find($up->id);
        $pieza->codigo = $up->codigo;
        $pieza->alto = $up->alto;
        $pieza->largo = $up->largo;
        $pieza->ancho = $up->ancho;
        $pieza->peso = $up->peso;
        //$pieza->check = false;
        //$pieza->timestamps = Carbon::now();
        $pieza->save();

        return redirect('piezas');
    }

     function altaLinea(Request $request){

        $newLinea = new Linea();
        $newLinea->codigo = $request->codigo;        
        $newLinea->pieza = $request->pieza;
        $newLinea->encargado = $request->encargado;
        $newLinea->timestamps = Carbon::now();
        $newLinea->save();

        return redirect('lineas');
    }

        function rmLinea($id){  
        $linea = Linea::find($id);
        $linea->delete();
        //return "se ha eliminado a ".$user->name;
        return redirect('lineas');//"Que pedo se ha eliminado a ".$user->name."!!!";
    }

    function upLinea(Request $up){

        $Linea = Linea::find($up->id);
        $Linea->codigo = $up->codigo;        
        $Linea->pieza = $up->pieza;
        $Linea->encargado = $up->encargado;
        //$newLinea->timestamps = Carbon::now();
        $Linea->save();

        return redirect('lineas');
    }
}
