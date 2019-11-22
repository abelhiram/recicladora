<?php

namespace App\Http\Controllers;
use App\actividad;
use Carbon\Carbon;

use Illuminate\Http\Request;

class actividadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        /*$id = \Auth::user()->id;
        $info = actividad::where('user_id', '=', $id)->get(); 
        $f='';
        foreach($info as $i){

            $fec = new carbon($i->fecha);
            $f=$f.$fec->format('N');
            
        }
        return $f;*/
        $fecha = date("Y-m-d");
        $hora = date('H:i:s');

        $mdlActividad = new actividad();
        $mdlActividad->user_id = $request['id'];
        $mdlActividad->hora = $hora;
        $mdlActividad->fecha = $fecha;
        $mdlActividad->tipo = '2';
        $mdlActividad->save();
        return 'éxito';
                
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
