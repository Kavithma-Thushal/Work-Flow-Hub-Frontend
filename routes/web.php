<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::prefix('employee')->group(function () {
    Route::get('view', [EmployeeController::class, 'view']);
    Route::post('store', [EmployeeController::class, 'store']);
    Route::patch('update/{id}', [EmployeeController::class, 'update']);
    Route::delete('delete/{id}', [EmployeeController::class, 'delete']);
    Route::get('getById/{id}', [EmployeeController::class, 'getById']);
    Route::get('getAll', [EmployeeController::class, 'getAll']);
});
