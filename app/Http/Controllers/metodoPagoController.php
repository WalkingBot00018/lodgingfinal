<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class metodoPagoController extends Controller
{
    public function index()
    {
        $metodosDePago = MetodoDePago::all();
        return view('metodo_de_pago.index', ['metodosDePago' => $metodosDePago]);
    }

    public function create()
    {
        return view("metodo_de_pago.create");
    }

    public function store(Request $request)
    {
        $request->validate([
            // Valida los campos del formulario de creación de método de pago
        ]);

        MetodoDePago::create([
            // Asigna los valores del formulario al modelo MetodoDePago
        ]);

        return redirect()->route("metodo_de_pago.index")->with("success", "Método de pago registrado exitosamente");
    }

    public function show($id)
    {
        $metodoDePago = MetodoDePago::find($id);

        if (!$metodoDePago) {
            return redirect()->route('metodo_de_pago.index')->with('error', 'Método de pago no encontrado');
        }

        return view('metodo_de_pago.show', ['metodoDePago' => $metodoDePago]);
    }

    public function edit($id)
    {
        $metodoDePago = MetodoDePago::find($id);
        return view('metodo_de_pago.edit', ['metodoDePago' => $metodoDePago]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            // Valida los campos del formulario de edición de método de pago
        ]);

        MetodoDePago::where('id', $id)->update([
            // Actualiza los campos del método de pago
        ]);

        return redirect()->route("metodo_de_pago.index")->with("success", "Método de pago actualizado exitosamente");
    }

    public function destroy($id)
    {
        MetodoDePago::destroy($id);
        return redirect()->route("metodo_de_pago.index")->with("success", "Método de pago eliminado exitosamente");





    }
}
