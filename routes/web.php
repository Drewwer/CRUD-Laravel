<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EmpleadoController;
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
//Rutas simples de empleado 
Route::get('/empleado', function () {
    return view('empleado.index');
});
//Rutas usando Clases
Route::get('/empleado/create', [EmpleadoController::class, 'create']);