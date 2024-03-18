<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $factura = Factura::all();
        return view("factu.index", compact("factura"));
    }


    public function create()
    {
        return view("factu.create");
    }

    public function store(Request $request)
    {

        Factura::create($request->all());


        return redirect()->route("factu.index")->with("success","factura creada con exito");
    }

    public function show($id)
{
    $factura = Factura::find($id);

    if (!$factura) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('factu.index')->with('error', 'factura no encontrada');
    }

    return view('factu.show', ['factura' => $factura]);
}

    public function edit($id)
    {
        $factura = Factura::find($id);
        return view('factu.edit', compact('factura'));
    }

    public function update(Request $request, $id)
    {
       

        // Actualiza el usuario
        Factura::where('id', $id)->update($request->except('_token', '_method'));

        return redirect('/factura')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id)
    {
        
        $users = Factura::find($id);
        $users->delete(); 
        return redirect('/factura')->with('success', 'Usuario eliminado correctamente');
        
    }
}
