<?php

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
GET: conseguir datos
POST: Guardar datos
PUT: Actualizar recursos
DELETE: Eliminar recursos
*/

Route::get('/mostrar-fecha',function(){
    echo "<h1>Fecha actual</h1>";
    echo date('d-m-y');
});