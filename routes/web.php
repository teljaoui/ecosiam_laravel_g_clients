<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ClientController::class , 'index']);
Route::get('/ajouter' , [ClientController::class , 'ajouter']);

Route::post('/store' , [ClientController::class , 'store']);

Route::get('/delete/{id}' , [ClientController::class , 'delete']);