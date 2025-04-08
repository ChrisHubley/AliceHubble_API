<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ReleaseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\VideosController;
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
Route::get('/releases/edit/{release}',[ReleaseController::class, 'editForm']);
Route::put('/releases/edit/{release}',[ReleaseController::class,'edit']);

Route::get('/articles', [ArticlesController::class, 'all']);
Route::get('/articles/add',[ArticlesController::class, 'addArticleForm']);
Route::post('/articles/add',[ArticlesController::class, 'create']);
Route::get('/articles/{article}',[ArticlesController::class, 'find']);
Route::delete('/articles/{article}',[ArticlesController::class, 'delete']);

Route::get('/videos',[VideosController::class, 'all']);
Route::get('/videos/add',[VideosController::class, 'addVideoForm']);
Route::post('/videos/add',[VideosController::class, 'create']);
Route::get('videos/{video}',[VideosController::class, 'find']);
