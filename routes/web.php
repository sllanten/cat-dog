<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\ConfigController@renderView')->name('usuario.login');

Route::post('/regristrarme','App\Http\Controllers\Controller@regUsuario')->name('usuario.regUser');
Route::post('/login','App\Http\Controllers\Controller@getLogin')->name('usuario.login');

Route::prefix('/veterinaria')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('/usuario')->middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/','App\Http\Controllers\Controller@renderDasboard')->name('usuario.dashboard');
        Route::get('/detalle/{name}','App\Http\Controllers\Controller@renderDetalle')->name('usuario.boardDetalle');
    });

    Route::prefix('/medico')->middleware(['auth:sanctum', 'verified'])->group(function () {
        Route::get('/','App\Http\Controllers\Controller@renderDasboard')->name('veterinario.boardMascota');
        Route::get('/detalle/{name}','App\Http\Controllers\Controller@renderDetalle')->name('veterinario.boardDetalle');
    });

});
