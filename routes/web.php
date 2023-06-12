<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectosController;

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

Route::get('/pdf', [ProyectosController::class, 'pdf'])->name('proyectos.pdf');

Route::get('/', [ProyectosController::class, 'index'])->name('proyectos.index');
Route::get('/create', [ProyectosController::class, 'create'])->name('proyectos.create');
Route::get('/edit/{id}', [ProyectosController::class, 'edit'])->name('proyectos.edit');
Route::get('/show/{id}', [ProyectosController::class, 'show'])->name('proyectos.show');

Route::post('/store', [ProyectosController::class, 'store'])->name('proyectos.store');
Route::put('/update/{id}', [ProyectosController::class, 'update'])->name('proyectos.update');
Route::delete('/destroy/{id}', [ProyectosController::class, 'destroy'])->name('proyectos.destroy');

