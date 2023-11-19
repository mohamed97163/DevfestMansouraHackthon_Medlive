<?php

use App\Http\Controllers\NotaficationConfirmBookController;
use Illuminate\Support\Facades\Route;


Route::controller(NotaficationConfirmBookController::class)
    // ->middleware(['auth:sanctum'])
    ->group(function () {
        Route::get('/note',[NotaficationConfirmBookController::class ,'index']);
        Route::get('/medicines/{medicine}',[NotaficationConfirmBookController::class ,'show']);
        Route::post('/medicines',[NotaficationConfirmBookController::class ,'store']);
        Route::patch('/medicines/{medicine}',[NotaficationConfirmBookController::class ,'update'])  ;
        Route::delete('/medicines/{medicine}',[NotaficationConfirmBookController::class ,'destroy']);
    }); 