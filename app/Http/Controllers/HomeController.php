<?php

namespace App\Http\Controllers;
use App\Charts\PulseChart;
use App\actividad;
use App\user;
use Carbon\Carbon;

use Illuminate\Http\Request;


class HomeController extends Controller
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
        $hoy = date("Y-m-d");
        $id = \Auth::user()->id;
        $info = actividad::where('user_id', '=', $id)->get(); 
        $ene=0;
        $feb=0;
        $mar=0;
        $abr=0;
        $may=0;
        $jun=0;
        $jul=0;
        $ago=0;
        $sep=0;
        $oct=0;
        $nov=0;
        $dic=0;
    
        $registros = actividad::where([
            ['user_id', '=', $id],
            ['fecha', '=', $hoy],
        ])->count();

        foreach($info as $i){
            $fec = new carbon($i->fecha);
            if($fec->format('m')==1){
                $ene=$ene+1;
            }
            if($fec->format('m')==2){
                $feb=$feb+1;
            }
            if($fec->format('m')==3){
                $mar=$mar+1;
            }
            if($fec->format('m')==4){
                $abr=$abr+1;
            }
            if($fec->format('m')==5){
                $may=$may+1;
            }
            if($fec->format('m')==6){
                $jun=$jun+1;
            }
            if($fec->format('m')==7){
                $jul=$jul+1;
            }
            if($fec->format('m')==8){
                $ago=$ago+1;
            }
            if($fec->format('m')==9){
                $sep=$sep+1;
            }
            if($fec->format('m')==10){
                $oct=$oct+1;
            }
            if($fec->format('m')==11){
                $nov=$nov+1;
            }
            if($fec->format('m')==12){
                $dic=$dic+1;
            }
        }

        $chart = new PulseChart;
        $chart->labels(['Enero', 'Febrero', 'Marzo', 'Abríl', 'Mayo', 'Junio', 'Julio', 'Agosto',
         'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']);
        $chart->dataset('2019', 'line', [$ene, $feb, $mar,$abr,$may,$jun,$jul,$ago,$sep,$oct,$nov,$dic])->options([
            'backgroundColor' => ['#ff6384'],
        ]);

        return view('home',compact('registros','chart'));
    }
}
