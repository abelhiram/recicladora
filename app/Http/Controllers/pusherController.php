<?php

namespace App\Http\Controllers;
use App\Charts\PulseChart;
use App\actividad;
use App\user;
use Carbon\Carbon;

use Illuminate\Http\Request;


class pusherController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = \Auth::user()->id;
        $info = actividad::where('user_id', '=', $id)->get(); 
        $lunes=0;
        foreach($info as $i){
            $fec = new carbon($i->fecha);
            if($fec->format('N')==2){
                $lunes=$lunes+1;
            }
        }
        return view('inicio');
    }
}
