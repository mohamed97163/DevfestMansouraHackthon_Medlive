<?php

use App\Http\Controllers\MedicineController;
use Illuminate\Support\Facades\Route;


Route::controller(MedicineController::class)
    // ->middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/medicines',[MedicineController::class ,'index']);
        Route::get('/medicines/{medicine}',[MedicineController::class ,'show']);
        Route::post('/medicines',[MedicineController::class ,'store']);
        Route::patch('/medicines/{medicine}',[MedicineController::class ,'update'])  ;
        Route::delete('/medicines/{medicine}',[MedicineController::class ,'destroy']);
    }); 