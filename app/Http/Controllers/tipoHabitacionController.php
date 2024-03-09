<?php

namespace App\Http\Controllers;
use App\Models\Tipo_habitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tipoHabitacionController extends Controller
{
    
    public function index()
    {
        $tipoHabitaciones = Tipo_habitacion::all();
        return view('tipo_habitacion.index', ['tipo_habitacion' => $tipoHabitaciones]);
    }
    
        public function create()
        {
            return view("tipo_habitacion.create");
        }
    
    
        public function store(Request $request)
        {
    
            Tipo_habitacion::create($request->all());
            
            $tipoHabitaciones = Tipo_habitacion::with('tipo_habitacion')->get();
    
            return redirect()->route("tipo_habitacion.index")->with("success","habitacion creada exitosamente");
      
        }
    
        public function show($Id_Tipo_Habitacion)
    {
        $tipoHabitaciones = Tipo_habitacion::find($Id_Tipo_Habitacion);
    
        if (!$tipoHabitaciones) {
            // Manejar el caso cuando la reserva  no exista
            return redirect()->route('tipo_habitacion.index')->with('error', 'habitacion no encontrado');
        }
    
        return view('tipo_habitacion.shows', ['tipo_habitacion' => $tipoHabitaciones]);
    }
    
        public function edit($Id_Tipo_Habitacion)
        {
            $tipoHabitaciones = Tipo_habitacion::find($Id_Tipo_Habitacion);
            return view('tipo_habitacion.edit', compact('tipo_habitacion'));
        }
    
        public function update(Request $request, $Id_Tipo_Habitacion)
        {
            // Actualiza el usuario
            Tipo_habitacion::where('Id_Tipo_Habitacion', $Id_Tipo_Habitacion)->update($request->except('_token', '_method'));
    
            return redirect('/tipo_habitacion')->with('success', 'habitacion actualizada correctamente');
        }
    
            
    
        
    
    public function destroy($Id_Tipo_Habitacion)
        {
            
            $tipoHabitaciones = Tipo_habitacion::find($Id_Tipo_Habitacion);
            $tipoHabitaciones->delete(); 
            return redirect('/tipo_habitacion')->with('success', 'Habitacion eliminada correctamente');
            
        }
}
