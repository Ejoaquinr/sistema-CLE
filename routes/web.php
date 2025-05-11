<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\GrupoConfirmadoController;
use App\Http\Controllers\HorarioController;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
Route::get('/admin/resultados', [App\Http\Controllers\ResultadosController::class, 'index'])->name('admin.resultados');

// Route::get('/admin/horarios', [App\Http\Controllers\HomeController::class, 'horarios'])->name('admin.horarios');

Route::get('/admin/horarios', [App\Http\Controllers\HorarioController::class, 'index'])->name('admin.horarios');

Route::post('/admin', [App\Http\Controllers\ResultadosController::class, 'store'])
    ->name('admin.store');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/toggle-form', [AdminController::class, 'toggleForm'])->name('admin.toggle-form');

    // Cambios use App\Http\Controllers\HorarioController;

// Route::get('/admin/horarios', [HorarioController::class, 'index'])->name('admin.horarios');

//

Route::get('/horarios/{id}/editar', [HorarioController::class, 'edit'])->name('ruta.editar');
Route::delete('/horarios/{id}', [HorarioController::class, 'destroy'])->name('ruta.eliminar');

Route::get('/admin/grupos', [GrupoController::class, 'index'])->name('admin.grupos');

Route::get('/admin/confirmar-grupo/{id}/{grupo}', [GrupoConfirmadoController::class, 'confirmarGrupo'])->name('grupo.confirmar');

