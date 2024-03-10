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


    public function store(Request $request)
    {
        $request->validate([
            "Nro_doc"=> "required|string|min:2|max:10",
            "Nombre"=> "required|string|min:5|max:20",
            "Apellido"=> "required|string|min:5|max:20",
            "email"=> "required|email|min:2|max:20",
            "password"=> "required|min:2|max:225",
            "Telefono"=> "required|string|min:2|max:10",
            "Estado"=> "required|string|min:5|max:20",
            "ID_rol"=> "required|exists:rol,ID_rol", // Asegura que el ID de rol enviado existe en la tabla de roles
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
