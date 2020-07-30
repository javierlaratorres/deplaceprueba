<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class VisitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numtotalinmuebles = DB::table('inmuebles')->count();

        $mueblesvisita = DB::select('select i.* FROM deplace_db.inmuebles as i 
inner join visitas as v on (v.inmuebleId = i.id) 
group by i.id');
        $numtotalinmueblesvisitas = count($mueblesvisita); 

        $visitados = DB::select('select * FROM deplace_db.visitas as v
where v.estado in (3,4)
');

        $numtotalinmueblesvisitados = count($visitados); 
       
       
        $ventasDeplace = DB::select('select * FROM deplace_db.inmuebles as i
where i.archivo = "Venta deplace"
');

        $numtotalventadeplace = count($ventasDeplace); 

        $visitasporinmueble = DB::select('select i.*,count(v.id) as visitasporinmueble FROM deplace_db.inmuebles as i 
inner join visitas as v on (v.inmuebleId = i.id) 
group by i.id
');

        
       
                                   
        return view('estadisticas', [
                'numtotalinmuebles' =>  $numtotalinmuebles,
                'numtotalinmueblesvisitas' =>  $numtotalinmueblesvisitas,
                'numtotalinmueblesvisitados' => $numtotalinmueblesvisitados,
                'numtotalventadeplace' => $numtotalventadeplace,
                'visitasporinmueble' => $visitasporinmueble
                ]);
      
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
        //
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
