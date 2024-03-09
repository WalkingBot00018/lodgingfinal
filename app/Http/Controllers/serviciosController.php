<?php

namespace App\Http\Controllers;

use App\Models\Servicio;
use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::all();
        return view('servicio.index', ['servicio' => $servicios]);
    }

    public function create()
    {
        return view("servicio.create");
    }

    public function store(Request $request)
    {
        Servicio::create($request->all());
        return redirect()->route("servicio.index")->with("success", "Servicio creado exitosamente");
    }

    public function show($ID_Servicio)
    {
        $servicio = Servicio::find($ID_Servicio);
        if (!$servicio) {
            return redirect()->route('servicio.index')->with('error', 'Servicio no encontrado');
        }
        return view('servicio.show', ['servicio' => $servicio]);
    }

    public function edit($ID_Servicio)
    {
        $servicio = Servicio::find($ID_Servicio);
        return view('servicio.edit', compact('servicio'));
    }

    public function update(Request $request, $ID_Servicio)
    {
        Servicio::where('ID_Servicio', $ID_Servicio)->update($request->except('_token', '_method'));
        return redirect('/servicio')->with('success', 'Servicio actualizado correctamente');
    }

    public function destroy($ID_Servicio)
    {
        $servicio = Servicio::find($ID_Servicio);
        $servicio->delete(); 
        return redirect('/servicio')->with('success', 'Servicio eliminado correctamente');
    }
}

