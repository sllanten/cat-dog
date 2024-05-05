<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\ConfigController@renderView')->name('login');

Route::post('/regristrarme','App\Http\Controllers\Controller@regUsuario')->name('regUser');
Route::post('/login','App\Http\Controllers\Controller@getLogin')->name('login');

Route::prefix('/veterinaria')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('/usuario')->middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/','App\Http\Controllers\Controller@renderDasboard')->name('dashboard');
        Route::get('/detalle/{name}','App\Http\Controllers\Controller@renderDetalle')->name('boardDetalle');
    });

    Route::prefix('/medico')->middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/','App\Http\Controllers\Controller@renderDasboard')->name('boardMascota');
        Route::get('/detalle/{name}','App\Http\Controllers\Controller@renderDetalle')->name('boardDetalle2');
    });

});
