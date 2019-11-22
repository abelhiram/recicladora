<?php

namespace App\Http\Controllers;
use App\Charts\PulseChart;
use App\actividad;

use Illuminate\Http\Request;

class chartController extends Controller
{
    public function index()
    {
        $pulses = actividad::all();
        $chart = new PulseChart;

        $chart->labels(['One', 'Two', 'Three']);
        $chart->dataset('My dataset 1', 'line', [1, 2, 1]);

        return view('home',compact('pulses','chart'));
    }
}
