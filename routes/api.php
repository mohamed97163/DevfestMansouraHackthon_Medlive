<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::prefix('medlive')
->group(function(){
    require __DIR__.'/api/medicines.php';
    require __DIR__.'/api/activeingredients.php';
    require __DIR__.'/api/categories.php';
    require __DIR__.'/api/pharmacies.php';
    require __DIR__.'/api/pharmacist.php';
    require __DIR__.'/api/notaficationconfirmbook.php';
    require __DIR__.'/api/notaficationconfirmpayment.php';
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
