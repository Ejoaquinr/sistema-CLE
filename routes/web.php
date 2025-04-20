<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// <!-- LOGOS IZQUIERDA -->
// <div class="flex items-center space-x-4">
//     <a href="http://www.gob.mx/" target="_blank" id="logGOB">
//         <img src="assets/img/Logo_del_Gobierno_de_México_(2018).png" alt="Logo 1" class="h-12 w-auto">
//     </a>
//     <a href="http://www.gob.mx/sep" target="_blank" id="logGOB">
//         <img src="assets/img/LOGO-SEP.png" alt="Logo 2" class="h-12 w-auto">
//     </a>
//     <a href="http://www.tecnm.mx/" target="_blank" id="logGOB">
//         <img src="assets/img/TecNM_logo.png" alt="Logo 2" class="h-12 w-auto">
//     </a>
//     <a href="{{ url('/') }}" target="_blank" id="logGOB">
//         <img src="assets/img/LogoIti.png" alt="Logo 2" class="h-12 w-auto">
//     </a>
// </div>