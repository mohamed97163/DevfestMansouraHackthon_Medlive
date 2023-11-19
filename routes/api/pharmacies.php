<?php

use App\Http\Controllers\PharmacyController;
use Illuminate\Support\Facades\Route;


Route::controller(PharmacyController::class)
    // ->middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/pharmacies',[PharmacyController::class ,'index']);
        Route::get('/pharmacies/{pharmacy}',[PharmacyController::class ,'show']);
        Route::post('/pharmacies',[PharmacyController::class ,'store']);
        Route::patch('/pharmacies/{pharmacy}',[PharmacyController::class ,'update'])  ;
        Route::delete('/pharmacies/{pharmacy}',[PharmacyController::class ,'destroy']);
        // Route::get('/pharmacies/medicines',[PharmacyController::class ,'getPharmacyMedicine']);
    }); 
    
