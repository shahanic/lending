<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/app', function () {
return view('app' );
});

Route::post('/save-car', [carController::class, 'saveCar']);
Route::post('/get-cars', [carController::class, 'getCars']);
Route::post('/delete-car', [carController::class, 'deleteCar']);
