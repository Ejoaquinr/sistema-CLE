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

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.index')->middleware('auth');

Route::get('/admin/resultados', [App\Http\Controllers\ResultadosController::class, 'index'])->name('admin.resultados')->middleware('auth');

// Route::get('/admin/horarios', [App\Http\Controllers\HomeController::class, 'horarios'])->name('admin.horarios');

Route::get('/admin/prelista', [App\Http\Controllers\PrelistaController::class, 'index'])->name('admin.prelista')->middleware('auth');

Route::post('/admin', [App\Http\Controllers\ResultadosController::class, 'store'])
    ->name('admin.store')->middleware('auth');

Route::get('/admin', [AdminController::class, 'index'])->name('admin.index')->middleware('auth');
Route::get('/admin/toggle-form', [AdminController::class, 'toggleForm'])->name('admin.toggle-form')->middleware('auth');

// Cambios use App\Http\Controllers\HorarioController;

// Route::get('/admin/horarios', [HorarioController::class, 'index'])->name('admin.horarios');

//

Route::get('/prelista/{id}/editar', [App\Http\Controllers\PrelistaController::class, 'edit'])->name('ruta.editar')->middleware('auth');
Route::delete('/prelista/{id}', [App\Http\Controllers\PrelistaController::class, 'destroy'])->name('ruta.eliminar')->middleware('auth');

Route::get('/admin/grupos', [App\Http\Controllers\GrupoConfirmadoController::class, 'index'])->name('admin.grupos')->middleware('auth');
// Route::get(uri: '/admin/grupos/reportes', [GrupoConfirmadoController::class, 'reportes'])->name('admin.grupos.reportes');
Route::get('/admin/pdf', [App\Http\Controllers\GrupoConfirmadoController::class, 'pdf'])->name('admin.pdf')->middleware('auth');

Route::get('/admin/confirmar-grupo/{id}/{grupo}', [App\Http\Controllers\GrupoConfirmadoController::class, 'confirmarGrupo'])->name('grupo.confirmar')->middleware('auth');
//cambio 11/05/2025
Route::post('/grupos-confirmados', [App\Http\Controllers\GrupoConfirmadoController::class, 'storeDesdeResultado'])->name('grupos-confirmados.store')->middleware('auth');
Route::put('/grupos/{id}/folio', [App\Http\Controllers\GrupoConfirmadoController::class, 'updateFolio'])->name('grupos.updateFolio')->middleware('auth');

Route::post('/grupo/{id}/guardar-folio', [App\Http\Controllers\GrupoConfirmadoController::class, 'guardarFolio'])->middleware('auth');
Route::post('/grupos-confirmados', [App\Http\Controllers\GrupoConfirmadoController::class, 'store'])->name('grupos-confirmados.store')->middleware('auth');

Route::post('/grupos-confirmados-desde-resultado', [App\Http\Controllers\GrupoConfirmadoController::class, 'storeDesdeResultado'])->name('grupos-confirmados.desde-resultado')->middleware('auth');
Route::get('/grupos/alumnos/create', [App\Http\Controllers\GrupoConfirmadoController::class, 'create'])->name('grupos.alumnos.create')->middleware('auth');
Route::post('/grupos/alumnos', [App\Http\Controllers\GrupoConfirmadoController::class, 'store'])->name('grupos.alumnos.store')->middleware('auth');
Route::get('/grupos/confirmados', [App\Http\Controllers\GrupoConfirmadoController::class, 'index'])->name('grupos.confirmados')->middleware('auth');
Route::get('/grupos/{id}/edit', [App\Http\Controllers\GrupoConfirmadoController::class, 'edit'])->name('grupos.edit')->middleware('auth');
Route::put('/grupos/{id}', [App\Http\Controllers\GrupoConfirmadoController::class, 'update'])->name('grupos.update')->middleware('auth');
Route::delete('/grupos/{id}', [App\Http\Controllers\GrupoConfirmadoController::class, 'destroy'])->name('grupos.destroy')->middleware('auth');
