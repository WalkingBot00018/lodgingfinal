<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index()
    {
        $habitacion = Habitacion::all();
        return view("habitacion.index", compact("habitacion"));
    }


    public function create()
    {
        return view("habitacion.create");
    }

    public function store(Request $request)
    {

        Habitacion::create($request->all());


        return redirect()->route("habitacion.index")->with("success","habitacion creada con exito");
    }

    public function show($id)
{
    $habitaciones = Habitacion::find($id);

    if (!$habitaciones) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('habitacion.index')->with('error', 'habitacion no encontrada');
    }

    return view('habitacion.show', ['habitaciones' => $habitaciones]);
}

    public function edit($id)
    {
        $habitaciones = Habitacion::find($id);
        return view('habitacion.edit', compact('habitaciones'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Habitacion::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/habitacion')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $users = Habitacion::find($id);
        $users->delete(); 
        return redirect('/habitacion')->with('success', 'Usuario eliminado correctamente');
        
    }
}
