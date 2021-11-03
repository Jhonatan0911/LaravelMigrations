<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
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

//Vista en la que se listaran los empleados
Route::get('/empleado', function () {
    return view('empleado.index');
});

// Llamando vista para crear empleado por medio del controlador
Route::get('/empleado/create',[EmpleadoController::class,'create'] );

//Accediendo a todas las rutas y metodos de forma automatica
Route::resource('empleado',EmpleadoController::class);