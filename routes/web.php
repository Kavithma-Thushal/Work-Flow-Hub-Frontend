<?php

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
