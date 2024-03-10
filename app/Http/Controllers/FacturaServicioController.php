<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FacturaServicio;


class FacturaServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $DFacturaServicio['factura_s']=FacturaServicio::paginate(5);
        return view('factura_servicio.index',$DFacturaServicio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('factura_servicio.create');

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
        $InsertarFS=request()->except('_token');
        FacturaServicio::insert($InsertarFS);
        return redirect('factura_servicio')->with('mensaje','Se agrego con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nro_Factura_Servicio)
    {
        //
        $verFactura_s=FacturaServicio::find($Nro_Factura_Servicio);
        return view('factura_servicio.show',compact('verFactura_s'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nro_Factura_Servicio)
    {
        //
        $factura_s=FacturaServicio::findOrFail($Nro_Factura_Servicio);
        return view('factura_servicio.edit',compact('factura_s'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nro_Factura_Servicio)
    {
        //
        $InsertarFS= request()->except(['_token','_method']);
        FacturaServicio::where('Nro_Factura_Servicio','=',$Nro_Factura_Servicio)->update($InsertarFS);        

        $factura_s=FacturaServicio::findOrFail($Nro_Factura_Servicio);
        return view('factura_servicio.edit',compact('factura_s'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nro_Factura_Servicio)
    {
        //
        FacturaServicio::destroy($Nro_Factura_Servicio);
        return redirect('factura_servicio')->with('mensaje','Eliminado exitosamente');

    }
}
