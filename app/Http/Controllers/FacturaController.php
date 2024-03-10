<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $DFactura['facturas']=Factura::paginate(5);
        return view('factura.index',$DFactura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('factura.create');
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
        $insertarFactura= request()->except('_token');
        Factura::insert($insertarFactura);
        return redirect('factura')->with('mensaje','La factura fue agregada con exito');
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
    public function edit($Nro_Factura)
    {
        //
        $fact=Factura::findOrFail($Nro_Factura);
        return view('factura.edit',compact('fact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Nro_Factura)
    {
        //
        $insertarFactura= request()->except(['_token','_method']);
        Factura::where('Nro_Factura','=',$Nro_Factura)->update($insertarFactura);        

        $fact=Factura::findOrFail($Nro_Factura);
        return view('factura.edit',compact('fact'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nro_Factura)
    {
        //
        Factura::destroy($Nro_Factura);
        return redirect('factura')->with('mensaje','La factura fue eliminada con exito');
    }
}
