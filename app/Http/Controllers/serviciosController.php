<?php

namespace App\Http\Controllers;

use App\Models\servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicio['servicio']=servicio::all();
        return view('servicio.index',$servicio);
    }

    public function create()
    {
        return view("servicio.create");
    }

    public function store(Request $request)
    {
        servicio::create($request->all());
        return redirect()->route("servicio.index")->with("success", "Servicio creado exitosamente");
    }

    public function show($ID_Servicio)
    {
        $servicio = servicio::find($ID_Servicio);
        if (!$servicio) {
            return redirect()->route('servicio.index')->with('error', 'Servicio no encontrado');
        }
        return view('servicio.show', ['servicio' => $servicio]);
    }

    public function edit($ID_Servicio)
    {
        $servicio = servicio::find($ID_Servicio);
        return view('servicio.edit', compact('servicio'));
    }

    public function update(Request $request, $ID_Servicio)
    {
        servicio::where('ID_Servicio', $ID_Servicio)->update($request->except('_token', '_method'));
        return redirect('/servicio')->with('success', 'Servicio actualizado correctamente');
    }

    public function destroy($ID_Servicio)
    {
        $servicio = servicio::find($ID_Servicio);
        $servicio->delete(); 
        return redirect('/servicio')->with('success', 'Servicio eliminado correctamente');
    }
}

