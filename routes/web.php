<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\FacturaServicioController;

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







//usuarios
Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->name('user.create');
Route::post('/usuarios/store', [UserController::class, 'store'])->name('user.store');
Route::get('/usuarios/{user}', [UserController::class, 'show'])->name('user.shows');
Route::get('/usuarios/{user}/editar', [UserController::class, 'edit'])->name('user.edit');
Route::put('/usuarios/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usuarios/{user}', [UserController::class, 'destroy'])->name('user.destroy');
Route::resource('/factura',FacturaController::class);
Route::resource('/factura_servicio',FacturaServicioController::class);