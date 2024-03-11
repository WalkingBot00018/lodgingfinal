<?php

namespace App\Http\Controllers;
use App\Models\Tipo_habitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tipoHabitacionController extends Controller
{
    
    public function index()
    {
        $tipoHabitacion = Tipo_habitacion::all();
        return view('tipo_habitacion.index', ['tipo_habitacion' => $tipoHabitacion]);
    }
    
        public function create()
        {
            return view("tipo_habitacion.create");
        }
    
    
        public function store(Request $request)
        {
    
            Tipo_habitacion::create($request->all());
            
            $tipoHabitacion = Tipo_habitacion::with('tipo_habitacion')->get();
    
            return redirect()->route("tipo_habitacion.index")->with("success","habitacion creada exitosamente");
      
        }
    
        public function show($Id_Tipo_Habitacion)
{
    $tipoHabitacion = Tipo_habitacion::find($Id_Tipo_Habitacion);

    if (!$tipoHabitacion) {
        // Manejar el caso cuando la habitación no exista
        return redirect()->route('tipo_habitacion.index')->with('error', 'Habitación no encontrada');
    }

    return view('tipo_habitacion.show', ['tipo_habitacion' => $tipoHabitacion]);
}

    
        public function edit($Id_Tipo_Habitacion)
        {
            $tipoHabitacion = Tipo_habitacion::find($Id_Tipo_Habitacion);
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
            
            $tipoHabitacion = Tipo_habitacion::find($Id_Tipo_Habitacion);
            $tipoHabitacion->delete(); 
            return redirect('/tipo_habitacion')->with('success', 'Habitacion eliminada correctamente');
            
        }
}
