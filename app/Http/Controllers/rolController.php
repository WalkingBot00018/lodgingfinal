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


/*    public function create()
    {
        return view("role.create");
    }
*/

    public function store(Request $request)
    {

        Rol::create($request->all());


        return redirect()->route("role.index")->with("success","rol exitoso");
    }

    public function show($id_rol)
{
    $roles = Rol::find($id_rol);

    if (!$roles) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('role.index')->with('error', 'rol no encontrado');
    }

    return view('role.show', ['roles' => $roles]);
}



    public function edit($id_rol)
    {
        $roles = Rol::find($id_rol);
        return view('role.edit', compact('roles'));
    }

    public function update(Request $request, $id_rol)
    {
       

        // Actualiza el usuario
        Rol::where('id_rol', $id_rol)->update($request->except('_token', '_method'));

        return redirect('/rol')->with('success', 'Usuario actualizado correctamente');
    }

        

    

public function destroy($id_rol)
    {
        
        $users = Rol::find($id_rol);
        $users->delete(); 
        return redirect('/rol')->with('success', 'Usuario eliminado correctamente');
        
    }

}
