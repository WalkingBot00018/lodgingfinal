<?php

namespace App\Http\Controllers;
use App\Models\Rol;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class rolController extends Controller
{
    public function index()
    {
        $rol = Rol::all();
        return view("role.index", compact("rol"));
    }


    public function store(Request $request)
    {

        roles::create($request->all());


        return redirect()->route("role.index")->with("success","rol exitoso");
    }


    public function show($ID_rol)
{
    $roles = Rol::find($ID_rol);

    if (!$roles) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('role.index')->with('error', 'rol no encontrado');
    }

    return view('role.shows', ['rol' => $roles]);
}
}
