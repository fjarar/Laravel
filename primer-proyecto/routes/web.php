<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/categorianueva',[CategoriaController::class,'nueva']);
Route::post('/categoriacrear',[CategoriaController::class,'crear']);
Route::get('/categoriaeditar/{id}',[CategoriaController::class,'editar']);
Route::post('/categoriaactualizar',[CategoriaController::class, 'actualizar']);
Route::get('/categoriaeliminar/{id}',[CategoriaController::class,'eliminar']);
Route::get('/productonuevo',[ProductoController::class, 'nuevo']);
Route::post('/productocrear',[ProductoController::class, 'crear']);
Route::get('/productoeditar/{id}',[ProductoController::class, 'editar']);
Route::post('/productoactualizar',[ProductoController::class, 'actualizar']);
Route::get('/productoeliminar/{id}',[ProductoController::class, 'eliminar']);
