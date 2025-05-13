<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ResultadosController;
use App\Http\Controllers\GrupoConfirmadoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\PrelistaController;

use App\Models\GrupoConfirmado;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index');
Route::get('/admin/resultados', [App\Http\Controllers\ResultadosController::class, 'index'])->name('admin.resultados');

// Route::get('/admin/horarios', [App\Http\Controllers\HomeController::class, 'horarios'])->name('admin.horarios');

Route::get('/admin/prelista', [App\Http\Controllers\PrelistaController::class, 'index'])->name('admin.prelista');

Route::post('/admin', [App\Http\Controllers\ResultadosController::class, 'store'])
    ->name('admin.store');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/toggle-form', [AdminController::class, 'toggleForm'])->name('admin.toggle-form');

    // Cambios use App\Http\Controllers\HorarioController;

// Route::get('/admin/horarios', [HorarioController::class, 'index'])->name('admin.horarios');

//

Route::get('/prelista/{id}/editar', [PrelistaController::class, 'edit'])->name('ruta.editar');
Route::delete('/prelista/{id}', [PrelistaController::class, 'destroy'])->name('ruta.eliminar');

Route::get('/admin/grupos', [GrupoConfirmadoController::class, 'index'])->name('admin.grupos');

Route::get('/admin/confirmar-grupo/{id}/{grupo}', [GrupoConfirmadoController::class, 'confirmarGrupo'])->name('grupo.confirmar');
//cambio 11/05/2025
Route::post('/grupos-confirmados', [GrupoConfirmadoController::class, 'storeDesdeResultado'])->name('grupos-confirmados.store');
Route::put('/grupos/{id}/folio', [GrupoConfirmadoController::class, 'updateFolio'])->name('grupos.updateFolio');

Route::post('/grupo/{id}/guardar-folio', [GrupoConfirmadoController::class, 'guardarFolio']);
Route::post('/grupos-confirmados', [GrupoConfirmadoController::class, 'store'])->name('grupos-confirmados.store');

Route::post('/grupos-confirmados-desde-resultado', [GrupoConfirmadoController::class, 'storeDesdeResultado'])->name('grupos-confirmados.desde-resultado');
