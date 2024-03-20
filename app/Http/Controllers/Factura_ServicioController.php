<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Factura_Servicio;
use Illuminate\Http\Request;

class Factura_ServicioController extends Controller
{
    public function index()
    {
        $factura_servicio = Factura_Servicio::all();
        return view("factuser.index", compact("factura_servicio"));
    }


    public function create()
    {
        return view("factuser.create");
    }

    public function store(Request $request)
    {

        Factura_Servicio::create($request->all());


        return redirect()->route("factuser.index")->with("success","factura servicio creada con exito");
    }

    public function show($id)
{
    $factura_servicio = Factura_Servicio::find($id);

    if (!$factura_servicio) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('factuser.index')->with('error', 'factura de servicio no encontrada');
    }

    return view('factuser.show', ['factura_servicio' => $factura_servicio]);
}

    public function edit($id)
    {
        $factura_servicio = Factura_Servicio::find($id);
        return view('factuser.edit', compact('factura_servicio'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Factura_Servicio::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/facturaservicio')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $users = Factura_Servicio::find($id);
        $users->delete(); 
        return redirect('/facturaservicio')->with('success', 'Usuario eliminado correctamente');
        
    }
}
