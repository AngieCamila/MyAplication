<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miprimerController;
use App\Http\Controllers\heladosController;
use App\Http\Controllers\ControladorPrecios;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\DocenteController;

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

/*

    Lo primero es nombrar la ruta en comilla simple, el nombre es el que quieras wuap@.
    Luego se pone una coma para crear la funcion y el return con el mensaje que queramos enviar

*/
Route::get('/miprimeraruta', function(){
    return "Ta potente Laravel";
});

/*
    Los parametros son muy importantes en las rutas de las paginas web
    y los ubicamos entre llaves {}. Los parametrso van dentro de la misma ruta
*/

Route::get('/minombre/{nombre}', function($nombre){
    return 'Hoy me presento cómo '. $nombre;
});

Route::get('micontroller/{y}/{z}', [miprimerController::class,'suma']);

Route::get('mivocation/{thing}', [miprimerController::class,'carrera']);

/* la clase va igual que el metodo entre corchetes
la clase va acompañada de ::class, y el método tiene que llamarse igual a
como está en la clase entre collima simple

*/
Route::get('heladeria/{topping}', [heladosController::class,'helado']);

Route::get('precio/{total}/{articulo}', [ControladorPrecios::class,'precio']);

Route::get('IVA/{Nombre}/{precio}', [ControladorPrecios::class,'getIVA']);

Route::resource('cursos', cursoController::class);
Route::resource('docentes', DocenteController::class);
