<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

    // Cambios use App\Http\Controllers\HorarioController;

// Route::get('/admin/horarios', [HorarioController::class, 'index'])->name('admin.horarios');
