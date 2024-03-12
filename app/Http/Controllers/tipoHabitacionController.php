<?php

namespace App\Http\Controllers;
use App\Models\Tipo_habitacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tipoHabitacionController extends Controller
{
    
    public function index()
    {
        $rol = Tipo_habitacion::all();
        return view("tipo_habitacion.index", compact("tipo_habitacion"));
    }


    public function create()
    {
        return view("tipo_habitacion.create");
    }


    public function store(Request $request)
    {

        Tipo_habitacion::create($request->all());


        return redirect()->route("tipo_habitacion.index")->with("success","tipo habitacion exitoso");
    }

    public function show($Id_Tipo_Habitacion)
{
    $tipo_habitacion = Tipo_habitacion::find($Id_Tipo_Habitacion);

    if (!$tipo_habitacion) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('tipo_habitacion.index')->with('error', 'rol no encontrado');
    }

    return view('tipo_habitacion.show', ['tipo_habitacion' => $tipo_habitacion]);
}



    public function edit($Id_Tipo_Habitacion)
    {
        $roles = Tipo_habitacion::find($Id_Tipo_Habitacion);
        return view('tipo_habitacion.edit', compact('tipo_habitacion'));
    }

    public function update(Request $request, $Id_Tipo_Habitacion)
    {
       

        // Actualiza el usuario
        Tipo_habitacion::where('Id_Tipo_Habitacion', $Id_Tipo_Habitacion)->update($request->except('_token', '_method'));

        return redirect('/tipo_habitacion')->with('success', 'Usuario actualizado correctamente');
    }

        

    

    public function destroy($Id_Tipo_Habitacion)
    {
        
        $users = Tipo_habitacion::find($Id_Tipo_Habitacion);
        $users->delete(); 
        return redirect('/rol')->with('success', 'Usuario eliminado correctamente');
        
    }
}
