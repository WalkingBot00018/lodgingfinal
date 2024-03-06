<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolController;
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


Route::get('/role', [rolController::class, 'index'])->name('role.index');

Route::get('/reserva', [reservaController::class, 'index'])->name('reserva.index');
Route::get('/reserva/create', [reservaController::class, 'create'])->name('reserva.create');
Route::post('/reserva/store', [reservaController::class, 'store'])->name('reserva.store');
Route::get('/reserva/{reservas}', [reservaController::class, 'show'])->name('reserva.shows');
Route::get('/reserva/{reservas}/editar', [reservaController::class, 'edit'])->name('reserva.edit');
Route::put('/reserva/{reservas}', [reservaController::class, 'update'])->name('reserva.update');
Route::delete('/reserva/{reservas}', [reservaController::class, 'destroy'])->name('reserva.destroy');
