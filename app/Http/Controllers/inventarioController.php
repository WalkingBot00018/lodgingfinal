<?php

namespace App\Http\Controllers;

use App\Models\Inventario; // Asegúrate de importar el modelo correcto de inventario

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function index()
    {
        $inventario = Inventario::all();
        return view('inventario.index', ['inventario' => $inventario]);
    }

    public function create()
    {
        return view("inventario.create");
    }

    public function store(Request $request)
    {
        Inventario::create($request->all());
        // Carga la relación 'habitacion' en lugar de 'reservas'
        return redirect()->route("inventario.index")->with("success", "Inventario registrado exitosamente");
    }


    public function show($id_inventario)
    {
        $inventario = Inventario::find($id_inventario);
        if (!$inventario) {
            // Manejar el caso cuando el inventario no existe
            return redirect()->route('inventario.index')->with('error', 'Inventario no encontrado');
        }
        return view('inventario.shows', ['inventario' => $inventario]);
    }

    public function edit($id_inventario)
    {
        $inventario = Inventario::find($id_inventario);
        return view('inventario.edit', compact('inventario'));
    }

    public function update(Request $request, $id_inventario)
    {
        // Actualiza el inventario
        Inventario::where('id_inventario', $id_inventario)->update($request->except('_token', '_method'));
        return redirect('/inventario')->with('success', 'Inventario actualizado correctamente');
    }

    public function destroy($id_inventario)
    {
        $inventario = Inventario::find($id_inventario);
        $inventario->delete(); 
        return redirect('/inventario')->with('success', 'Inventario eliminado correctamente');
    }
}
