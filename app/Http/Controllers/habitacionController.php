<?php

namespace App\Http\Controllers;
use App\Models\Habitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index()
    {
        $habitaciones = Habitacion::all();
        return view('habitacion.index', ['habitaciones' => $habitaciones]);
    }
    
    public function create()
    {
        return view("habitacion.create");
    }
    
    public function store(Request $request)
    {
        Habitacion::create($request->all());
        return redirect()->route("habitacion.index")->with("success","Habitación creada exitosamente");
    }
    
    public function show($ID_Habitacion)
    {
        $habitaciones = Habitacion::find($ID_Habitacion);
        if (!$habitaciones) {
            return redirect()->route('habitacion.index')->with('error', 'Habitación no encontrada');
        }
        return view('habitacion.show', ['habitacion' => $habitaciones]);
    }
    
    public function edit($ID_Habitacion)
    {
        $habitacion = Habitacion::find($ID_Habitacion);
        return view('habitacion.edit', compact('habitacion'));
    }
    
    public function update(Request $request, $ID_Habitacion)
    {
        $habitacion = Habitacion::find($ID_Habitacion);
        $habitacion->update($request->all());
        return redirect('/habitacion')->with('success', 'Habitación actualizada correctamente');
    }
    
    public function destroy($ID_Habitacion)
    {
        $habitacion = Habitacion::find($ID_Habitacion);
        $habitacion->delete(); 
        return redirect('/habitacion')->with('success', 'Habitación eliminada correctamente');
    }
}

