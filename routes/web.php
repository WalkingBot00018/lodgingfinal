<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\rolController;

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


Route::get('/rol', [rolController::class, 'index'])->name('role.index');
Route::get('/rol/{role}', [rolController::class, 'show'])->name('role.show');