<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\Users;
use App\Charts\PiezasBarChart;
use App\Charts\LineasChart;
use App\Models\User;
use App\Models\Pieza;
use App\Models\Linea;
use App\Models\AlmacenPieza;
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

    function almacen(){
        return view('almacen');
    }

    function altaUsuario(Request $request){

        $newuser = new User();
        $newuser->name = $request->name;
        $newuser->assignRole($request->puesto);
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
        
        $id = DB::table('piezas')->where('codigo', $request->pieza)->value('id');
        $pieza = Pieza::find($id);
        $newLinea = new Linea();
        $newLinea->codigo = $request->codigo;        
        $newLinea->pieza = $request->pieza;
        $newLinea->encargado = $request->encargado;
        $newLinea->status = true;
        $newLinea->timestamps = Carbon::now();        
        $newLinea->save();
        $pieza->check = true;
        $pieza->save();
        return redirect('lineas');
    }

        function rmLinea($id){  
        $linea = Linea::find($id);
        $id = DB::table('piezas')->where('codigo', $linea->pieza)->value('id');
        $pieza = Pieza::find($id);
        $pieza->check = false;
        $pieza->save();
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

    function altaAlmacen(Request $request){

        $newpieza = new AlmacenPieza();
        $newpieza->codigo_pieza = $request->codigo_pieza;
        $newpieza->piezas_ok = $request->piezas_ok;
        $newpieza->scrap = $request->scrap;
        $newpieza->min_alto = $request->min_alto;
        $newpieza->min_largo = $request->min_largo;
        $newpieza->min_ancho = $request->min_ancho;
        $newpieza->min_peso = $request->min_peso;
        $newpieza->max_alto = $request->max_alto;
        $newpieza->max_largo = $request->max_largo;
        $newpieza->max_ancho = $request->max_ancho;
        $newpieza->max_peso = $request->max_peso;        
        $newpieza->timestamps = Carbon::now();
        $newpieza->save();

        return redirect('almacen');
    }

       function rmAlmacen($id){  
        $pieza = AlmacenPieza::find($id);
        $pieza->delete();
        //return "se ha eliminado a ".$user->name;
        return redirect('almacen');//"Que pedo se ha eliminado a ".$user->name."!!!";
    }

    function upAlmacen(Request $request){

        $newpieza = AlmacenPieza::find($request->id);
        $newpieza->codigo_pieza = $request->codigo_pieza;
        $newpieza->piezas_ok = $request->piezas_ok;
        $newpieza->scrap = $request->scrap;
        $newpieza->min_alto = $request->min_alto;
        $newpieza->min_largo = $request->min_largo;
        $newpieza->min_ancho = $request->min_ancho;
        $newpieza->min_peso = $request->min_peso;
        $newpieza->max_alto = $request->max_alto;
        $newpieza->max_largo = $request->max_largo;
        $newpieza->max_ancho = $request->max_ancho;
        $newpieza->max_peso = $request->max_peso;        
        //$newpieza->timestamps = Carbon::now();
        $newpieza->save();

        return redirect('almacen');
    }
}
