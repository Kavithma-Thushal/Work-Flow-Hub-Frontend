<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/company', function () {
    return view('pages.company');
});

Route::get('/employee', function () {
    return view('pages.employee');
});

Route::prefix('employee')->group(function () {
    Route::post('store', [EmployeeController::class, 'store']);
    Route::patch('update/{id}', [EmployeeController::class, 'update']);
    Route::delete('delete/{id}', [EmployeeController::class, 'delete']);
    Route::get('getAll', [EmployeeController::class, 'getAll']);
});
