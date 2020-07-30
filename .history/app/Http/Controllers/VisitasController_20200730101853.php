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

        $numtotalinmueblesvisita = DB::select('select i.* FROM deplace_db.inmuebles as i 
inner join visitas as v on (v.inmuebleId = i.id) 
group by i.id');

       /* $numtotalinmueblesvisita = DB::table('inmuebles')
                                    ->join('visitas', 'inmuebles.id', '=', 'visitas.inmuebleId')
                                    ->groupby('inmuebles.id')
                                    ->get();*/

        $numtotalinmueblesvisitas = count($numtotalinmueblesvisita);                           
                                   
        return view('estadisticas', [
                'numtotalinmuebles' =>  $numtotalinmuebles,
                'numtotalinmueblesvisitas' =>  $numtotalinmueblesvisitas
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
