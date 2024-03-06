<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\reservaController;


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
Route::get('/reserva/{reservas}', [reservaController::class, 'show'])->name('reserva.shows');
Route::get('/reserva/{reservas}/editar', [reservaController::class, 'edit'])->name('reserva.edit');
Route::put('/reserva/{reservas}', [reservaController::class, 'update'])->name('reserva.update');
Route::delete('/reserva/{reservas}', [reservaController::class, 'destroy'])->name('reserva.destroy');