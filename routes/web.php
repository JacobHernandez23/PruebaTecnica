<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('ajax-crud-datatable', [EmpleadoController::class, 'index']);
Route::post('store', [EmpleadoController::class, 'store']);
Route::post('edit', [EmpleadoController::class, 'edit']);
Route::post('delete', [EmpleadoController::class, 'destroy']);