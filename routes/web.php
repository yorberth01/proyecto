<?php

use App\Http\Controllers\cursosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;


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

Route::get('/', homeController::class);


Route::controller(cursosController::class)->group(function(){
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});

/* Route::get('cursos', [cursosController::class, 'index']);
Route::get('cursos/create', [cursosController::class, 'create']);
Route::get('cursos/{curso}', [cursosController::class, 'show']); */



/* Route::get('cursos/{cursos}/{categoria?}', function ($curso, $categoria=null) {
    if ($categoria) {
        return "Bienvenido al curso: $curso de la categoria $categoria";
    }else {
         return "Bienvenido al: $curso";
    }

}); */


