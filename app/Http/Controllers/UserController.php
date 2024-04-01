<?php

namespace App\Http\Controllers;
use App\models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('user.index', ['users'=>$users]);
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
        ],[

            'Nro_doc.numeric'=>'No Poner numeros',
            'Nro_doc.required'=>'Es obligatorio',
            'Nro_doc.digits'=>'debe tener almenos 10 digitos',
            'Nombre.string'=>'No Poner numeros',
            'Nombre.required'=>'Es Obligatorio',
            'Nombre.min'=>'Escriba minimo 2 caracter',
            'Nombre.max'=>'Supero el limite de caracteres',
            'Apellido.string'=>'No Poner numeros',
            'Apellido.required'=>'Es Obligatorio',
            'Apellido.min'=>'Escriba minimo 2 caracter',
            'Apellido.max'=>'Supero el limite de caracteres',
            'email.email'=>'no es efectivo como correo',
            'email.required'=>'Es Obligatorio',
            'email.min'=>'Escriba minimo 2 caracter',
            'email.max'=>'Supero el limite de caracteres',
            'Telefono.string'=>'No Poner letras',
            'Telefono.required'=>'Es Obligatorio',
            'Telefono.min'=>'Escriba minimo 2 caracter',
            'Telefono.max'=>'Supero el limite de caracteres',
            'Telefono.regex'=>'es numerico y tener almenos 10 digitos',
            'password.required'=>'Obligatorio',
            'password.min'=>'Escriba minimo 7 caracter',
            'password.max'=>'Supera el limite de caracteres',
            'password.regex'=>'Requiere al menos una letra mayúscula, un número y un caracter especial',
            'Id_rol.required'=> 'Es Obligatorio'
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

        return redirect('/login')->with('status', 'Registro exitoso. Por favor, inicia sesión.');
        
    }
    public function show($ID_Usuario)
{
    $user = User::find($ID_Usuario);

    if (!$user) {
        // Manejar el caso cuando el usuario no existe
        return redirect()->route('usuarios.index')->with('error', 'Usuario no encontrado');
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
public function buscar(Request $request){
        $query = $request->input('buscar');
        $users = User::where('Nombre', 'LIKE', "%$query%")
        ->orwhere('Apellido', 'LIKE', "%$query%")
        ->orwhere('email', 'LIKE', "%$query%")
        ->get();

        return view('usuarios.buscar', compact('users'));
    }
}

