<?php

use Illuminate\Support\Facades\Route;

Route::get('/','App\Http\Controllers\ConfigController@renderView')->name('login');

Route::post('/regristrarme','App\Http\Controllers\Controller@regUsuario')->name('usuario.regUser');
Route::post('/login','App\Http\Controllers\Controller@getLogin')->name('usuario.login');

Route::prefix('/veterinaria')->middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::prefix('/usuario')->group(function () {
        Route::get('/','App\Http\Controllers\Controller@renderDasboard')->middleware(['can:usuario.dashboard'])
        ->name('usuario.dashboard');
        Route::get('/detalle/{name}','App\Http\Controllers\Controller@renderDetalle')->middleware(['can:usuario.boardDetalle'])
        ->name('usuario.boardDetalle');
    });

    Route::prefix('/medico')->group(function () {
        Route::get('/','App\Http\Controllers\Controller@renderDasboard')->middleware(['can:veterinario.dashboard'])
        ->name('veterinario.dashboard');
        Route::get('/detalle/{name}','App\Http\Controllers\Controller@renderDetalle')->middleware(['can:veterinario.boardDetalle'])
        ->name('veterinario.boardDetalle');
    });

});
