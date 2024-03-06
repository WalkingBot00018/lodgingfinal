<?php

namespace App\Http\Controllers;
use App\Models\Reserva;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class reservaController extends Controller
{
    public function index(){
        
        $reservas = Reserva::with('reservas')->get();
        return view('reserva.index', ['reserva' => $reservas]);
    }

    public function create()
    {
        return view("reserva.create");
    }


    public function store(Request $request)
    {

        Reserva::create($request->all());
        
        $reserva = Reserva::with('reserva')->get();

        return redirect()->route("reserva.index")->with("success","reserva creada exitosamente");

        
        
    }

    public function show($Nro_Reserva)
{
    $reservas = Reserva::find($Nro_Reserva);

    if (!$reservas) {
        // Manejar el caso cuando la reserva  no exista
        return redirect()->route('reserva.index')->with('error', 'reserva no encontrado');
    }

    return view('reserva.shows', ['reservas' => $reservas]);
}

    public function edit($Nro_Reserva)
    {
        $reservas = Reserva::find($Nro_Reserva);
        return view('reserva.edit', compact('reservas'));
    }

    public function update(Request $request, $Nro_Reserva)
    {
       

        // Actualiza el usuario
        Reserva::where('Nro_Reserva', $Nro_Reserva)->update($request->except('_token', '_method'));

        return redirect('/reserva')->with('success', 'Reserva actualizada correctamente');
    }

        

    

public function destroy($Nro_Reserva)
    {
        
        $reservas = Reserva::find($Nro_Reserva);
        $reservas->delete(); 
        return redirect('/reserva')->with('success', 'Reserva eliminada correctamente');
        
    }
}
