<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\rolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\reservaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Tipo_HabitacionController;
use App\Http\Controllers\habitacionController;
use App\Http\Controllers\serviciosController;



use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FacturaServicioController;
use App\Http\Controllers\inventarioController;
use App\Http\Controllers\MetodoPagoController;
use App\Http\Controllers\Factura_ServicioController;
use App\Http\Controllers\habitaciones_vistasController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//roles

Route::get('/role', [rolController::class, 'index'])->name('role.index');


Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('user.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('user.store');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('user.shows');
Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('user.edit');
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('user.destroy');


Route::get('/reserva', [reservaController::class, 'index'])->name('reserva.index');
Route::get('/reserva/create', [reservaController::class, 'create'])->name('reserva.create');
Route::post('/reserva/store', [reservaController::class, 'store'])->name('reserva.store');
Route::get('/reserva/{reserva}', [reservaController::class, 'show'])->name('reserva.show');
Route::get('/reserva/{reserva}/editar', [reservaController::class, 'edit'])->name('reserva.edit');
Route::put('/reserva/{reserva}', [reservaController::class, 'update'])->name('reserva.update');
Route::delete('/reserva/{reserva}', [reservaController::class, 'destroy'])->name('reserva.destroy');


//Rutas de Login y Logout
Route::get('login', [LoginController::class,'index'])->name('login');
Route::post('logout', [LogoutController::class,'store'])->name('logout');
Route::post('login', [LoginController::class,'store']);



//Vista de usuario logueado
Route::get('/home', [HomeController::class,'index'])->name('home.index')->middleware('auth');


Route::get('/factura', [FacturaController::class, 'index'])->name('factu.index');
Route::get('/factura/create',[FacturaController::class, 'create'])->name('factu.create');
Route::post('/factura/store', [FacturaController::class, 'store'])->name('factu.store');
Route::get('/factura/{factura}', [FacturaController::class, 'show'])->name('factu.show');
Route::get('/factura/{factura}/editar', [FacturaController::class, 'edit'])->name('factu.edit');
Route::put('/factura/{factura}', [FacturaController::class, 'update'])->name('factu.update');
Route::delete('/factura/{factura}', [FacturaController::class, 'destroy'])->name('factu.destroy');


Route::get('/facturaservicio', [Factura_ServicioController::class, 'index'])->name('factuser.index');
Route::get('/facturaservicio/create',[Factura_ServicioController::class, 'create'])->name('factuser.create');
Route::post('/facturaservicio/store', [Factura_ServicioController::class, 'store'])->name('factuser.store');
Route::get('/facturaservicio/{factura_servicio}', [Factura_ServicioController::class, 'show'])->name('factuser.show');
Route::get('/facturaservicio/{factura_servicio}/editar', [Factura_ServicioController::class, 'edit'])->name('factuser.edit');
Route::put('/facturaservicio/{factura_servicio}', [Factura_ServicioController::class, 'update'])->name('factuser.update');
Route::delete('/facturaservicio/{factura_servicio}', [Factura_ServicioController::class, 'destroy'])->name('factuser.destroy');

Route::resource('/habitaciones_vistas',habitaciones_vistasController::class);





Route::get('/tipo_habitacion', [Tipo_HabitacionController::class, 'index'])->name('tipoha.index');
Route::get('/tipo_habitacion/create',[Tipo_HabitacionController::class, 'create'])->name('tipoha.create');
Route::post('/tipo_habitacion/store', [Tipo_HabitacionController::class, 'store'])->name('tipoha.store');
Route::get('/tipo_habitacion/{tipo_habitacion}', [Tipo_HabitacionController::class, 'show'])->name('tipoha.show');
Route::get('/tipo_habitacion/{tipo_habitacion}/editar', [Tipo_HabitacionController::class, 'edit'])->name('tipoha.edit');
Route::put('/tipo_habitacion/{tipo_habitacion}', [Tipo_HabitacionController::class, 'update'])->name('tipoha.update');
Route::delete('/tipo_habitacion/{tipo_habitacion}', [Tipo_HabitacionController::class, 'destroy'])->name('tipoha.destroy');

Route::get('/habitacion', [habitacionController::class, 'index'])->name('habitacion.index');
Route::get('/habitacion/create', [habitacionController::class, 'create'])->name('habitacion.create');
Route::post('/habitacion/store', [habitacionController::class, 'store'])->name('habitacion.store');
Route::get('/habitacion/{habitaciones}', [habitacionController::class, 'show'])->name('habitacion.show');
Route::get('/habitacion/{habitaciones}/editar', [habitacionController::class, 'edit'])->name('habitacion.edit');
Route::put('/habitacion/{habitaciones}', [habitacionController::class, 'update'])->name('habitacion.update');
Route::delete('/habitacion/{habitaciones}', [habitacionController::class, 'destroy'])->name('habitacion.destroy');

Route::get('/servicio', [serviciosController::class, 'index'])->name('servicio.index');
Route::get('/servicio/create', [serviciosController::class, 'create'])->name('servicio.create');
Route::post('/servicio/store', [serviciosController::class, 'store'])->name('servicio.store');
Route::get('/servicio/{servicio}', [serviciosController::class, 'show'])->name('servicio.show');
Route::get('/servicio/{servicio}/editar', [serviciosController::class, 'edit'])->name('servicio.edit');
Route::put('/servicio/{servicio}', [serviciosController::class, 'update'])->name('servicio.update');
Route::delete('/servicio/{servicio}', [serviciosController::class, 'destroy'])->name('servicio.destroy');


Route::get('/metodo_pago', [MetodoPagoController::class, 'index'])->name('metodo_pago.index');
Route::get('/metodo_pago/create', [MetodoPagoController::class, 'create'])->name('metodo_pago.create');
Route::post('/metodo_pago/store', [MetodoPagoController::class, 'store'])->name('metodo_pago.store');
Route::get('/metodo_pago/{metodo_pago}', [MetodoPagoController::class, 'show'])->name('metodo_pago.show');
Route::get('/metodo_pago/{metodo_pago}/editar', [MetodoPagoController::class, 'edit'])->name('metodo_pago.edit');
Route::put('/metodo_pago/{metodo_pago}', [MetodoPagoController::class, 'update'])->name('metodo_pago.update');
Route::delete('/metodo_pago/{metodo_pago}', [MetodoPagoController::class, 'destroy'])->name('metodo_pago.destroy');



Route::get('/inventario', [inventarioController::class, 'index'])->name('inventario.index');
Route::get('/inventario/create', [inventarioController::class, 'create'])->name('inventario.create');
Route::post('/inventario/store', [inventarioController::class, 'store'])->name('inventario.store');
Route::get('/inventario/{inventario}', [inventarioController::class, 'show'])->name('inventario.show');
Route::get('/inventario/{metodo_pago}/editar', [inventarioController::class, 'edit'])->name('inventario.edit');
Route::put('/inventario/{inventario}', [inventarioController::class, 'update'])->name('inventario.update');
Route::delete('/inventario/{inventario}', [inventarioController::class, 'destroy'])->name('inventario.destroy');
