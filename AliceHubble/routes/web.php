<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ReleaseController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get("/", [SectionController::class, 'all']);
Route::get('/releases', [ReleaseController::class, 'all']);
Route::get('/releases/add',[ReleaseController::class, 'addReleaseForm']);
Route::post('/releases/add',[ReleaseController::class, 'create']);
Route::get('/releases/{release}',[ReleaseController::class, 'find']);
Route::delete('/releases/{release}',[ReleaseController::class, 'delete']);

Route::get('/articles', [ArticlesController::class, 'all']);
Route::get('/articles/add',[ArticlesController::class, 'addArticleForm']);
Route::post('/articles/add',[ArticlesController::class, 'create']);

Route::get('/videos',[\App\Http\Controllers\VideosController::class, 'all']);
Route::get('/videos/add',[\App\Http\Controllers\VideosController::class, 'addVideoForm']);
