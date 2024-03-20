<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\MetodoPago;
use Illuminate\Http\Request;

class MetodoPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Metodopago['metodopago']=MetodoPago::all();
        return view('metodo_pago.index',$Metodopago);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('metodo_pago.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    //  */
    public function store(Request $request)
    {
        //
        $insertarMP= request()->except('_token');
        MetodoPago::insert($insertarMP);
        return redirect('metodo_pago')->with('mensaje','El metodo de pago se agrego con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Id_Metodo_Pago)
    {
        //
        $verMetodoPago=MetodoPago::find($Id_Metodo_Pago);
        return view('metodo_pago.show',compact('verMetodoPago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Metodo_Pago)
    {
        //
        $MeP=MetodoPago::findOrFail($Id_Metodo_Pago);
        return view('metodo_pago.edit',compact('MeP'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Id_Metodo_Pago)
    {
        //
        $insertarMP= request()->except(['_token','_method']);
        MetodoPago::where('$Id_Metodo_Pago','=',$Id_Metodo_Pago)->update($insertarMP);    
        $MetodoP=MetodoPago::findOrFail($Id_Metodo_Pago);
        return view('metodo_pago.edit',compact('MetodoP'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_Metodo_Pago)
    {
        //
        MetodoPago::destroy($Id_Metodo_Pago);
        return redirect('metodo_pago')->with('mensaje','El metodo de pago fue eliminado exitosamente');
    }
}
