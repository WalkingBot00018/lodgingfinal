<?php

namespace App\Http\Controllers;
use App\Models\habitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class habitacionController extends Controller
{
    public function index()
    {
        $habitaciones = habitacion::all();
        return view('habitacion.index', ['habitacion' => $habitaciones]);
    }
    
        public function create()
        {
            return view("habitacion.create");
        }
    
    
        public function store(Request $request)
        {
    
            habitacion::create($request->all());
            
            $habitaciones = habitacion::with('habitacion')->get();
    
            return redirect()->route("habitacion.index")->with("success","habitacion creada exitosamente");
      
        }
    
        public function show($Nro_Habitacion)
    {
        $habitaciones = habitacion::find($Nro_Habitacion);
    
        if (!$habitaciones) {
            // Manejar el caso cuando la reserva  no exista
            return redirect()->route('habitacion.index')->with('error', 'habitacion no encontrado');
        }
    
        return view('habitacion.shows', ['habitaciones' => $habitaciones]);
    }
    
        public function edit($Nro_Habitacion)
        {
            $habitaciones = habitacion::find($Nro_Habitacion);
            return view('habitacion.edit', compact('habitacion'));
        }
    
        public function update(Request $request, $Nro_Habitacion)
        {
            // Actualiza el usuario
            habitacion::where('Nro_Habitacion', $Nro_Habitacion)->update($request->except('_token', '_method'));
    
            return redirect('/habitacion')->with('success', 'habitacion actualizada correctamente');
        }
    
            
    
        
    
    public function destroy($Nro_Habitacion)
        {
            
            $habitaciones = habitacion::find($Nro_Habitacion);
            $habitaciones->delete(); 
            return redirect('/habitacion')->with('success', 'Habitacion eliminada correctamente');
            
        }
}
