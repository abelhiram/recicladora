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
        $id = \Auth::user()->id;
        $info = actividad::where('user_id', '=', $id)->get(); 
        $lunes=0;
        foreach($info as $i){
            $fec = new carbon($i->fecha);
            if($fec->format('N')==2){
                $lunes=$lunes+1;
            }
        }

        $chart = new PulseChart;
        $chart->labels(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']);
        $chart->dataset('My dataset 1', 'line', [$lunes, 100, 63,5,250])->options([
            'backgroundColor' => ['#ff6384'],
        ]);


        $chart2 = new PulseChart;
        $chart2->labels(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']);
        $chart2->dataset('My dataset 2', 'pie', [100, 100, 63,5,250])->options([
            'backgroundColor' => ['#ff6384','#36a2eb','#ff6384','#36a2eb','#36a2eb','#36a2eb','#ff6384'],
        ]);

        $chart3 = new PulseChart;
        $chart3->labels(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']);
        $chart3->dataset('My dataset 2', 'bar', [30, 100, 63,5,56])->options([
            'backgroundColor' => ['#ff6384','#36a2eb','#ff6384','#36a2eb','#36a2eb','#36a2eb','#ff6384'],
        ]);

        $chart4 = new PulseChart;
        $chart4->labels(['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo']);
        $chart4->dataset('My dataset 2', 'doughnut', [100, 100, 63,5,250])->options([
            'backgroundColor' => ['#ff6384','#36a2eb','#ff6384','#36a2eb','#36a2eb','#36a2eb','#ff6384'],
        ]);



        return view('home',compact('pulses','chart','chart2','chart3','chart4'));
    }
}
