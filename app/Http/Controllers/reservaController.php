<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::all();
        return view('reserva.index', ['reservas' => $reservas]);
    }

    public function create()
    {
        return view("reserva.create");
    }

    public function store(Request $request)
    {
        Reserva::create($request->all());

        return redirect()->route("reserva.index")->with("success", "Reserva creada exitosamente");
    }

    public function show($Nro_Reserva)
    {
        $reserva = Reserva::find($Nro_Reserva);

        if (!$reserva) {
            return redirect()->route('reserva.index')->with('error', 'Reserva no encontrada');
        }

        return view('reserva.show', ['reserva' => $reserva]);
    }

    public function edit($Nro_Reserva)
    {
        $reserva = Reserva::find($Nro_Reserva);
        return view('reserva.edit', compact('reserva'));
    }

    public function update(Request $request, $Nro_Reserva)
    {
         // Actualiza el usuario
         Reserva::where('Nro_Reserva', $Nro_Reserva)->update($request->except('_token', '_method'));

         return redirect('/reserva')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy($Nro_Reserva)
    {
        $reserva=Reserva::find($Nro_Reserva);
        $reserva->delete();
        return redirect('/reserva')->with('success','reserva eliminada');
    }
}
