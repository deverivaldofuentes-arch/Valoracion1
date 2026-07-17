<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('vehiculos.index');
});

use App\Http\Controllers\VehiculoController;

Route::resource('vehiculos', VehiculoController::class);
