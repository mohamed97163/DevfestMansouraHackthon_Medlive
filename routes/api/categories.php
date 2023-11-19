<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(CategoryController::class)
    // ->middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/categories',[CategoryController::class ,'index']);
        Route::get('/categories/{category}',[CategoryController::class ,'show']);
        Route::post('/categories',[CategoryController::class ,'store']);
        Route::patch('/categories/{category}',[CategoryController::class ,'update'])  ;
        Route::delete('/categories/{category}',[CategoryController::class ,'destroy']);
    }); 