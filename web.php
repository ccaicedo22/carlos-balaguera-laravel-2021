<?php

use Illuminate\Support\Facades\Route;
use App\Models\Empresa;
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

Route::get('testEmpresas',function(){

});

Route :: get ( 'listaempleados' , function () {
    $empleado = Empleado :: all ();
    return  view ( 'tabla' , compact ( 'empresa' , 'empleado' ));
});
