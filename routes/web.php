<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\UploadController;


Route::get('/uploadcompleted', [App\Http\Controllers\UploadController::class, 'uploadCompleted']);

Route::get('/multiuploads', [App\Http\Controllers\UploadController::class, 'uploadForm']);
Route::post('/multiuploads', [App\Http\Controllers\UploadController::class, 'uploadSubmit']);

Route::get('/', function () {
    return view('welcome');
});
