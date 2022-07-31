<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Charts\Users;
use App\Charts\PiezasBarChart;
use App\Charts\LineasChart;
use App\Models\User;
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
        return "se ha eliminado a ".$user->name;
        //return redirect('personal');//"Que pedo se ha eliminado a ".$user->name."!!!";
    }
    
}
