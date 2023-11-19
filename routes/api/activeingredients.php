<?php

use App\Http\Controllers\ActiveIngerdientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(ActiveIngerdientController::class)
    // ->middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/activeingredients',[ActiveIngerdientController::class ,'index']);
        Route::get('/activeingredients/{activeingredient}',[ActiveIngerdientController::class ,'show']);
        Route::post('/activeingredients',[ActiveIngerdientController::class ,'store']);
        Route::patch('/activeingredients/{activeingredient}',[ActiveIngerdientController::class ,'update'])  ;
        Route::delete('/activeingredients/{activeingredient}',[ActiveIngerdientController::class ,'destroy']);
    }); 