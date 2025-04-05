<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/", [\App\Http\Controllers\SectionController::class, 'all']);
Route::get('/releases', [\App\Http\Controllers\ReleaseController::class, 'all']);
Route::get('/releases/add',[\App\Http\Controllers\ReleaseController::class, 'addReleaseForm']);
Route::post('/releases/add',[\App\Http\Controllers\ReleaseController::class, 'create']);
