<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('home', ['users'=>$users]);
    }

    public function create()
    {
        return view("auth.register");
    }

/**
 * La funcion store toma los datos traidos del formalario registro
 * con el objeto request se ejecuta la funcion validate y esta valida todos los datos con los parametros perminentes
 *Crea un objeto User y se le da como atributos
 *
 *
 *
 *
 *
 */
    public function store(Request $request)
    {
        $request->validate([
            "Nro_doc" => "required|numeric|digits:10",
            "Nombre" => "required|string|min:2|max:20",
            "Apellido" => "required|string|min:2|max:20",
            "email" => "required|email|max:255|unique:users,email",
            "password" => [
                "required",
                "string",
                "min:8", // Longitud mínima
                "max:128", // Longitud máxima
                "regex:/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/", // Requiere al menos una letra mayúscula, un número y un caracter especial
            ], // Ajustado el mínimo y máximo para una contraseña más razonable
            "Telefono" => "required|string|regex:/^[0-9]+$/|min:2|max:15", // Ajustado el máximo para permitir números de teléfono más largos
            "Estado" => "required|string|min:5|max:50", // Ajustado el máximo para estados con nombres más largos
            "ID_rol" => "required|exists:rol,ID_rol",// Asegura que el ID de rol enviado existe en la tabla de roles
        ]);

        // User::create($request->all());

        $user = User::create([
            'Nro_doc' =>$request->Nro_doc,
            "Nombre"=> $request->Nombre,
            "Apellido"=> $request->Apellido,
            "email"=> $request->email,
            "password"=> Hash::make($request->password),
            "Telefono"=> $request->Telefono,
            "Estado"=> $request->Estado,
            "ID_rol"=> $request->ID_rol,
        ]);

        $users = User::with('rol')->get();

        auth()->attempt($request->only('','email','password'));

        return redirect()->route("user.index")->with("success","usuario registrado exitosamente");

    }
    public function show($ID_Usuario)
{
    $user = User::find($ID_Usuario);

    if (!$user) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('user.index')->with('error', 'Usuario no encontrado');
    }

    return view('user.shows', ['user' => $user]);
}


public function edit($ID_Usuario)
    {
        $users = User::find($ID_Usuario);
        return view('user.edit', compact('users'));
    }

    public function update(Request $request, $ID_Usuario)
    {


        // Actualiza el usuario
        User::where('ID_usuario', $ID_Usuario)->update($request->except('_token', '_method'));

        return redirect('/usuarios')->with('success', 'Usuario actualizado correctamente');
    }





public function destroy($ID_Usuario)
    {

        $users = User::find($ID_Usuario);
        $users->delete();
        return redirect('/usuarios')->with('success', 'Usuario eliminado correctamente');

    }
}
