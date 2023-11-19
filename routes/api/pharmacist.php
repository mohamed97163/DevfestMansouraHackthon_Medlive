<?php

use App\Http\Controllers\PharmacistController;
use Illuminate\Support\Facades\Route;


Route::controller(PharmacistController::class)
    // ->middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/pharmacists',[PharmacistController::class ,'index']);
        Route::get('/pharmacists/{pharmacist}',[PharmacistController::class ,'show']);
        Route::post('/pharmacists',[PharmacistController::class ,'store']);
        Route::patch('/pharmacists/{pharmacist}',[PharmacistController::class ,'update'])  ;
        Route::delete('/pharmacists/{pharmacist}',[PharmacistController::class ,'destroy']);
    }); 