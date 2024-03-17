<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tipo_Habitacion;
use Illuminate\Http\Request;

class Tipo_HabitacionController extends Controller
{
    public function index()
    {
        $tipo_hab = Tipo_Habitacion::all();
        return view("tipoha.index", compact("tipo_hab"));
    }

    public function create()
    {
        return view("tipoha.create");
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            "Nro_Habitacion"=> "required|string|min:2|max:10",
            "Descripcion"=> "required|string|min:5|max:20",
            "Precio"=> "required|numeric", // Cambiado a 'numeric' para asegurarnos de que sea un número
            "Disponibilidad"=> "required|string|min:5|max:20",
        ]);

        // Crear una nueva instancia de Tipo_Habitacion con los datos del formulario
        $tipo_habitacion = new Tipo_Habitacion();
        $tipo_habitacion->Nro_habitacion = $request->Nro_Habitacion;
        $tipo_habitacion->Descripcion = $request->Descripcion;
        $tipo_habitacion->Precio = $request->Precio;
        $tipo_habitacion->Disponibilidad = $request->Disponibilidad;

        // Guardar el nuevo tipo de habitación en la base de datos
        $tipo_habitacion->save();

        // Redirigir a la vista index con un mensaje de éxito
        return redirect()->route("tipoha.index")->with("success","Tipo de habitación registrada exitosamente");
    }

    public function show($id)
{
    $tipo_habitacion = Tipo_Habitacion::find($id);

    if (!$tipo_habitacion) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('tipoha.index')->with('error', 'tipo de habitacion no encontrada');
    }

    return view('tipoha.show', ['tipo_habitacion' => $tipo_habitacion]);
}

    public function edit($id)
    {
        $tipo_habitacion = Tipo_Habitacion::find($id);
        return view('tipoha.edit', compact('tipo_habitacion'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Tipo_Habitacion::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/tipo_habitacion')->with('success', 'Usuario actualizado correctamente');
    }

        

    

    public function destroy($id)
    {
        
        $users = Tipo_Habitacion::find($id);
        $users->delete(); 
        return redirect('/tipo_habitacion')->with('success', 'Usuario eliminado correctamente');
        
    }

}
